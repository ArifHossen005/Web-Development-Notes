<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;


Route::get('/demo1Path', [DemoController::class, 'demo1']);
Route::get('/demo2Path', [DemoController::class, 'demo2']);
Route::get('/demo3Path', [DemoController::class, 'demo3']);
Route::get('/demo4Path', [DemoController::class, 'demo4']);
Route::get('/demo5Path', [DemoController::class, 'demo5']);
Route::get('/demo6Path', [DemoController::class, 'demo6']);
Route::get('/demo7Path', [DemoController::class, 'demo7']);
Route::get('/demo8Path', [DemoController::class, 'demo8']);
Route::get('/demo9Path', [DemoController::class, 'demo9']);
Route::get('/demo10Path', [DemoController::class, 'demo10']);
Route::get('/demo11Path', [DemoController::class, 'demo11']);
Route::get('/demo12Path', [DemoController::class, 'demo12']);
Route::get('/demo13Path', [DemoController::class, 'demo13']);
Route::get('/demo14Path', [DemoController::class, 'demo14']);
Route::get('/demo15Path/{number1}/{number2}', [DemoController::class, 'demo15']);
Route::post('/demo16Path', [DemoController::class, 'demo16']);
Route::post('/demo17Path', [DemoController::class, 'demo17']);
Route::post('/demo18Path', [DemoController::class, 'demo18']);
Route::post('/demo19Path', [DemoController::class, 'demo19']);
Route::post('/demo20Path', [DemoController::class, 'demo20']);
