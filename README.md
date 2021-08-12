# A simple to use Fathom SDK for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/juststeveking/fathom-sdk.svg?style=flat-square)](https://packagist.org/packages/juststeveking/fathom-sdk)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/juststeveking/fathom-sdk/run-tests?label=tests)](https://github.com/juststeveking/fathom-sdk/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/juststeveking/fathom-sdk/Check%20&%20fix%20styling?label=code%20style)](https://github.com/juststeveking/fathom-sdk/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/juststeveking/fathom-sdk.svg?style=flat-square)](https://packagist.org/packages/juststeveking/fathom-sdk)

This package is a WIP, please do not use yet.

PRs are welcome!

## Installation

You can install the package via composer:

```bash
composer require juststeveking/fathom-sdk
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="JustSteveKing\Fathom\FathomServiceProvider" --tag="fathom-sdk-config"
```

This is the contents of the published config file:

```php
return [
    'token' => env('FATHOM_TOKEN'),
    'site' => env('FATHOM_SITE'),
];
```

## Usage

```php
Fathom::account(); // Get my account details.

Fathom::sites()->get(); // Get all sites.
Fathom::sites()->create([...]); // Create a site.
Fathom::sites()->first('12345'); // Get a single site.
Fathom::sites()->update('12345', [...]); // Update a site.
Fathom::sites()->delete('12345'); // Delete a site.
Fathom::sites()->wipe('12345'); // Wipe data from site.

Fathom::track('12345')->pageView([...]); // Track a pageview - coming soon.
Fathom::track('12345')->event('12345', [...]); // Track an event - coming soon.

Fathom::events('12345')->get(); // Get all events.
Fathom::events('12345')->create([...]); // Create an event.
Fathom::events('12345')->first('54321'); // Get a single event.
Fathom::events('12345')->update('54321', [...]); // Update an event.
Fathom::events('12345')->delete('54321'); // Delete an event.
Fathom::events('12345')->wipe('54321'); // Wipe data from event.

Fathom::aggregations()->generate([...]); // Generate an aggregation;

Fathom::current('12345'); // Get current visitors for a site.
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Steve McDougall](https://github.com/JustSteveKing)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
