<?php

declare(strict_types=1);

namespace JustSteveKing\Fathom\Resources;

class Events
{
    public function __construct(
        private string $site,
    ) {}

    public function site(): string
    {
        return $this->site;
    }

    public function get()
    {
        //
    }

    public function create(array $attributes)
    {
        //
    }

    public function first(string $id = null)
    {
        //
    }

    public function update(string $id = null, array $attributes)
    {
        //
    }

    public function delete(string $id = null)
    {
        //
    }

    public function wipe(string $id = null)
    {
        //
    }
}
