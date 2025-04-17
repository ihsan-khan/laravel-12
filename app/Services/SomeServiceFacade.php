<?php 

namespace App\Services;

class SomeServiceFacade extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return 'SomeService';
    }
}
  