<?php

declare(strict_types=1);

namespace JustSteveKing\Fathom\Resources;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use JustSteveKing\Fathom\Support\FathomValidation;
use JustSteveKing\Fathom\Transporter\AggregatesRequest;

class Aggregations
{
    public function generate(array $attributes): Collection
    {
        $validator = Validator::make(
            $attributes,
            FathomValidation::aggregateValidation(),
        );

        if ($validator->fails()) {
            throw new ValidationException(
                validator: $validator,
            );
        }

        $response = AggregatesRequest::build()
            ->authenticate()
            ->withQuery(
                query: $validator->validated(),
            )->send();

        if ($response->failed()) {
            throw $response->toException();
        }

        return new Collection(
            items: $response->json(),
        );
    }
}
