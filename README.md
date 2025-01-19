# Media Field component for the Backstage CMS

[![Latest Version on Packagist](https://img.shields.io/packagist/v/vormkracht10/backstage-media-field.svg?style=flat-square)](https://packagist.org/packages/vormkracht10/backstage-media-field)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/vormkracht10/backstage-media-field/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/vormkracht10/backstage-media-field/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/vormkracht10/backstage-media-field/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/vormkracht10/backstage-media-field/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/vormkracht10/backstage-media-field.svg?style=flat-square)](https://packagist.org/packages/vormkracht10/backstage-media-field)

## Nice to meet you, we're [Vormkracht10](https://vormkracht10.nl)

Hi! We are a web development agency from Nijmegen in the Netherlands and we use Laravel for everything: advanced websites with a lot of bells and whitles and large web applications.

## About this package

This package adds a powerful Media field component to the Backstage CMS. It allows you to:

-   Upload and manage media files (images, videos, audio, PDFs) directly in your forms
-   Configure accepted file types per field
-   Enable single or multiple file uploads
-   Easily integrate with Laravel's file storage system
-   Preview uploaded media files
-   Organize media assets with a built-in media library
-   Handle file validation and processing automatically

The Media field is built on top of Filament's form components and integrates seamlessly with the Backstage CMS interface.

## Installation

You can install the package via composer:

```bash
composer require vormkracht10/backstage-media-field
```

Then you need to add the Uploadcare field to your `backstage.php` config file:

```php
return [
    'fields' => [
        Vormkracht10\MediaField\Media::class,
    ],
];
```

## Usage

After adding the Media field to your `backstage.php` config file, the field will automatically be available in the Backstage CMS.

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
