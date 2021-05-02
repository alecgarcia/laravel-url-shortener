<?php

namespace Alecgarcia\LaravelUrlShortener;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Alecgarcia\LaravelUrlShortener\Skeleton\SkeletonClass
 */
class LaravelUrlShortenerFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-url-shortener';
    }
}
