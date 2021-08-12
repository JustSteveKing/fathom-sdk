<?php

declare(strict_types=1);

namespace JustSteveKing\Fathom\Factory;

use Carbon\Carbon;
use JustSteveKing\Fathom\ValueObject\Site;

class SiteFactory
{
    public static function make(array $attributes): Site
    {
        return new Site(
            id: $attributes['id'],
            object: $attributes['object'],
            name: $attributes['name'],
            sharing: $attributes['sharing'],
            created: Carbon::parse($attributes['created_at']),
        );
    }
}
