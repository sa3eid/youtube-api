<?php 

namespace Youtube\Facades;

use Illuminate\Support\Facades\Facade;

class Youtube extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Youtube\Youtube';
    }
}
