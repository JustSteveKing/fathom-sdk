<?php

declare(strict_types=1);

namespace JustSteveKing\Fathom\Resources;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use JustSteveKing\Fathom\Factory\SiteFactory;
use JustSteveKing\Fathom\Support\FathomValidation;
use JustSteveKing\Fathom\Transporter\Sites\CreateRequest;
use JustSteveKing\Fathom\Transporter\Sites\DeleteRequest;
use JustSteveKing\Fathom\Transporter\Sites\FetchRequest;
use JustSteveKing\Fathom\Transporter\Sites\ListRequest;
use JustSteveKing\Fathom\Transporter\Sites\UpdateRequest;
use JustSteveKing\Fathom\Transporter\Sites\WipeRequest;
use JustSteveKing\Fathom\ValueObject\Site;

class Sites
{
    public function get(): Collection
    {
        $response = ListRequest::build()
            ->authenticate()
            ->send();

        if ($response->failed()) {
            throw $response->toException();
        }

        return $response->collect('data')->map(function ($site) {
            return SiteFactory::make(
                attributes: $site,
            );
        });
    }

    public function create(array $attributes): Site
    {
        $validator = Validator::make(
            $attributes,
            FathomValidation::siteValidation(),
        );

        if ($validator->fails()) {
            throw new ValidationException(
                validator: $validator,
            );
        }

        $response = CreateRequest::build()
            ->authenticate()
            ->withData(
                data: $validator->validated(),
            )->send();

        if ($response->failed()) {
            throw $response->toException();
        }

        return SiteFactory::make(
            attributes: $response->json(),
        );
    }

    public function first(string $id)
    {
        $response = FetchRequest::build()
            ->authenticate()
            ->setPath(
                path: "sites/$id",
            )->send();

        if ($response->failed()) {
            throw $response->toException();
        }

        return SiteFactory::make(
            attributes: $response->json(),
        );
    }

    public function update(string $id, array $attributes)
    {
        $validator = Validator::make(
            $attributes,
            FathomValidation::siteUploadValidation(),
        );

        if ($validator->fails()) {
            throw new ValidationException(
                validator: $validator,
            );
        }

        $response = UpdateRequest::build()
            ->authenticate()
            ->setPath(
                path: "sites/$id"
            )->withData(
                data: $validator->validated(),
            )->send();

        if ($response->failed()) {
            throw $response->toException();
        }

        return SiteFactory::make(
            attributes: $response->json(),
        );
    }

    public function delete(string $id): bool
    {
        $response = DeleteRequest::build()
            ->authenticate()
            ->setPath(
                path: "sites/$id",
            )->send();

        if ($response->failed()) {
            throw $response->toException();
        }

        return $response->json()['deleted'];
    }

    public function wipe(string $id)
    {
        $response = WipeRequest::build()
            ->authenticate()
            ->setPath(
                path: "sites/$id/data",
            )->send();

        if ($response->failed()) {
            throw $response->toException();
        }

        return $response->json()['wiped'];
    }
}
