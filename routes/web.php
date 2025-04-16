<?php

use App\Services\DosomeThing;
use App\Services\DoSomeThingFacade;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/facade', function () {
    // $dosomeThing = app('App\Services\DosomeThing');
    // $dosomeThing = new DosomeThing();
    // return $dosomeThing->doSomething();
    return DoSomeThingFacade::doSomething(); //facade
})->name('facade'); 

