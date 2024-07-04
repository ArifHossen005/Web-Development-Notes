<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DemoController;
use App\Http\Middleware\DemoMiddleware;
use App\Http\Controllers\DemoController1;

//Route::get('/hello1', [DemoController::class, 'DemoAction1'])->middleware([DemoMiddleware::class]);
Route::get('/hello2/{key}', [DemoController::class, 'DemoAction2'])->middleware([DemoMiddleware::class]);
Route::get('/hello3', [DemoController::class, 'DemoAction3']);

/*
Route::get('/demo1/{key}', [DemoController1::class, 'DemoAction1'])->middleware([DemoMiddleware::class]);
Route::get('/demo2/{key}', [DemoController1::class, 'DemoAction2'])->middleware([DemoMiddleware::class]);
Route::get('/demo3/{key}', [DemoController1::class, 'DemoAction3'])->middleware([DemoMiddleware::class]);
Route::get('/demo4/{key}', [DemoController1::class, 'DemoAction4'])->middleware([DemoMiddleware::class]);
*/

Route::middleware(['throttle'])->group(function () {
    Route::get('/demo1/{key}', [DemoController1::class, 'DemoAction1']);
    Route::get('/demo2/{key}', [DemoController1::class, 'DemoAction2']);
    Route::get('/demo3/{key}', [DemoController1::class, 'DemoAction3']);
    Route::get('/demo4/{key}', [DemoController1::class, 'DemoAction4']);
});
