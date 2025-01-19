<?php

namespace Vormkracht10\MediaField\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Vormkracht10\MediaField\MediaField
 */
class MediaField extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Vormkracht10\MediaField\MediaField::class;
    }
}
