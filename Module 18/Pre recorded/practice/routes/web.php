<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;

Route::get('/', [DemoController::class, 'DemoAction']);
Route::get('/firstRow', [DemoController::class, 'DemoAction1']);
Route::get('/specificRow', [DemoController::class, 'DemoAction2']);
Route::get('/specificColumn', [DemoController::class, 'DemoAction3']);
Route::get('/aggregate', [DemoController::class, 'DemoAction4']);
Route::get('/select', [DemoController::class, 'DemoAction5']);
Route::get('/innerJoin', [DemoController::class, 'DemoAction6']);
Route::get('/leftJoin', [DemoController::class, 'DemoAction7']);
Route::get('/rightJoin', [DemoController::class, 'DemoAction8']);
Route::get('/crossJoin', [DemoController::class, 'DemoAction9']);
Route::get('/joinClause', [DemoController::class, 'DemoAction10']);
Route::get('/union', [DemoController::class, 'DemoAction11']);
