<?php

namespace MyListerHub\Skeleton\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MyListerHub\Skeleton\Skeleton
 */
class Skeleton extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \MyListerHub\Skeleton\Skeleton::class;
    }
}
