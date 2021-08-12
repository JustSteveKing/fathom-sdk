<?php

declare(strict_types=1);

namespace JustSteveKing\Fathom;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FathomServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('fathom-sdk')
            ->hasConfigFile();
    }
}
