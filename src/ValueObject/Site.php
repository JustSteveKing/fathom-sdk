<?php

declare(strict_types=1);

namespace JustSteveKing\Fathom\ValueObject;

use Carbon\Carbon;

class Site
{
    public function __construct(
        public string $id,
        public string $object,
        public string $name,
        public string $sharing,
        public Carbon $created,
    ) {}
}
