<?php

namespace App\Services;

class  DoSomeThingFacade extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return 'SomeServiceTest';
    }
} 
