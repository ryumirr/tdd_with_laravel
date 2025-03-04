<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class WasRunService extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'WasRunService';
    }
}