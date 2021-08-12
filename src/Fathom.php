<?php

declare(strict_types=1);

namespace JustSteveKing\Fathom;

use JustSteveKing\Fathom\Factory\AccountFactory;
use JustSteveKing\Fathom\Resources\Aggregations;
use JustSteveKing\Fathom\Resources\Events;
use JustSteveKing\Fathom\Resources\Sites;
use JustSteveKing\Fathom\Transporter\AccountRequest;
use JustSteveKing\Fathom\Transporter\CurrentVisitorsRequest;
use JustSteveKing\Fathom\ValueObject\Account;

class Fathom
{
    public static function sites(): Sites
    {
        return new Sites;
    }

    public static function events(null|string $id = null): Events
    {
        return new Events(
            site: $id ?? config('fathom-sdk.site'),
        );
    }

    public static function aggregations(): Aggregations
    {
        return new Aggregations;
    }

    public static function current(null|string $id = null)
    {
        $site = $id ?? config('fathom-sdk.site');

        $response = CurrentVisitorsRequest::build()
            ->authenticate()
            ->setPath(
                path: 'sites/' . $site . '/current_visitors',
            )->send();

        if ($response->failed()) {
            throw $response->toException();
        }
    }

    /**
     * @throws \Illuminate\Http\Client\RequestException
     */
    public static function account(): Account
    {
        $response = AccountRequest::build()
            ->authenticate()
            ->send();

        if ($response->failed()) {
            throw $response->toException();
        }

        return AccountFactory::make(
            attributes: $response->json(),
        );
    }
}
