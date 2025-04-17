<?php

use Facades\App\Services\Process;
use App\Services\SomeServiceFacade;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/facade', function () {
    return SomeServiceFacade::doSomething();
})->name('facade'); 

Route::get('/real-time-facade', function () {
    return Process::processing();
})->name('real'); 