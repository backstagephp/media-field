<?php

namespace Vormkracht10\MediaField;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Vormkracht10\MediaField\Commands\MediaFieldCommand;

class MediaFieldServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('backstage-media-field')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_backstage_media_field_table')
            ->hasCommand(MediaFieldCommand::class);
    }
}
