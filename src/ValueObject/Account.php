<?php

declare(strict_types=1);

namespace JustSteveKing\Fathom\ValueObject;

class Account
{
    public function __construct(
        public int $id,
        public string $object,
        public string $name,
        public string $email,
    ) {}
}
