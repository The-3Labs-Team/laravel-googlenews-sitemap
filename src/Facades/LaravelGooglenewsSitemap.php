<?php

namespace The3LabsTeam\LaravelGooglenewsSitemap\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \The3LabsTeam\LaravelGooglenewsSitemap\LaravelGooglenewsSitemap
 */
class LaravelGooglenewsSitemap extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \The3LabsTeam\LaravelGooglenewsSitemap\LaravelGooglenewsSitemap::class;
    }
}
