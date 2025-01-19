# Media Field component for the Backstage CMS

[![Latest Version on Packagist](https://img.shields.io/packagist/v/vormkracht10/backstage-media-field.svg?style=flat-square)](https://packagist.org/packages/vormkracht10/backstage-media-field)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/vormkracht10/backstage-media-field/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/vormkracht10/backstage-media-field/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/vormkracht10/backstage-media-field/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/vormkracht10/backstage-media-field/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/vormkracht10/backstage-media-field.svg?style=flat-square)](https://packagist.org/packages/vormkracht10/backstage-media-field)

## Nice to meet you, we're [Vormkracht10](https://vormkracht10.nl)

Hi! We are a web development agency from Nijmegen in the Netherlands and we use Laravel for everything: advanced websites with a lot of bells and whitles and large web applications.

## About this package

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require vormkracht10/backstage-media-field
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="backstage-media-field-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="backstage-media-field-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="backstage-media-field-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$media = new Vormkracht10\Media();
echo $media->echoPhrase('Hello, Vormkracht10!');
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

-   [Baspa](https://github.com/vormkracht10)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
