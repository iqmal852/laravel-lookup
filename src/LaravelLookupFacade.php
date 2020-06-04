<?php

namespace Iqmal\LaravelLookup;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Iqmal\LaravelLookup\Skeleton\SkeletonClass
 */
class LaravelLookupFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-lookup';
    }
}
