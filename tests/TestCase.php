<?php

declare(strict_types=1);

namespace JustSteveKing\Fathom\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use JustSteveKing\Fathom\FathomServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            FathomServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');
    }
}
