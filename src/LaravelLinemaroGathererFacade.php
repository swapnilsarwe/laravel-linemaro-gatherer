<?php

namespace Codeat3\LaravelLinemaroGatherer;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Codeat3\LaravelLinemaroGatherer\Skeleton\SkeletonClass
 */
class LaravelLinemaroGathererFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-linemaro-gatherer';
    }
}
