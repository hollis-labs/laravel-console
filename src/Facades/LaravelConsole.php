<?php

namespace HollisLabs\LaravelConsole\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \HollisLabs\LaravelConsole\LaravelConsole
 */
class LaravelConsole extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \HollisLabs\LaravelConsole\LaravelConsole::class;
    }
}
