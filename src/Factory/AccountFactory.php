<?php

declare(strict_types=1);

namespace JustSteveKing\Fathom\Factory;

use JustSteveKing\Fathom\ValueObject\Account;

class AccountFactory
{
    public static function make(array $attributes): Account
    {
        return new Account(
            id: $attributes['id'],
            object: $attributes['object'],
            name: $attributes['name'],
            email: $attributes['email'],
        );
    }
}
