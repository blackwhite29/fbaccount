<?php

namespace Fbaccount\Fbaccount\Facades;

use Illuminate\Support\Facades\Facade;

class Fbaccount extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'fbaccount';
    }
}
