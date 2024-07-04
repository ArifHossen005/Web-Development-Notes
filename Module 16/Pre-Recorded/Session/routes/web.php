<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;

Route::get('/demo/{num1}/{num2}', [DemoController::class, 'DemoAction1']);
Route::get('/demo1/{email}', [DemoController::class, 'SessionPut']);
Route::get('/demo2/{email}', [DemoController::class, 'SessionPull']);
Route::get('/demo3/{email}', [DemoController::class, 'SessionGet']);
Route::get('/demo4/{email}', [DemoController::class, 'SessionForget']);
Route::get('/demo5/{email}', [DemoController::class, 'SessionFlush']);
