<?php

namespace Casimiro\LaravelAuth\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Casimiro\LaravelAuth\LaravelAuth
 */
class LaravelAuth extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Casimiro\LaravelAuth\LaravelAuth::class;
    }
}
