<?php

use PhpOption\Some;
use App\Services\DosomeThing;
use App\Services\SomeService;
use App\Services\DoSomeThingFacade;
use App\Services\SomeServiceFacade;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/facade', function () {
    return SomeServiceFacade::doSomething();
})->name('facade'); 

