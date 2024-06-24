<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\FromDataController;





Route::get('/demo1', [DemoController::class, 'DemoAction1']);
Route::get('/demo2/{name}/{age}', [DemoController::class, 'DemoAction2']);
Route::post('/demo3', [DemoController::class, 'DemoAction3']);
Route::post('/demo4', [DemoController::class, 'DemoAction4']);
Route::get('/demo5/{name}/{age}', [DemoController::class, 'DemoAction5']);
Route::post('/demo6', [FromDataController::class, 'DemoAction6']);
Route::post('/demo7', [FromDataController::class, 'DemoAction7']);
Route::post('/demo8', [FromDataController::class, 'DemoAction8']);
Route::post('/demo9', [FromDataController::class, 'DemoAction9']);
Route::post('/demo10', [FromDataController::class, 'DemoAction10']);
Route::post('/demo11', [FromDataController::class, 'DemoAction11']);
Route::get('/demo12', [FromDataController::class, 'DemoAction12']);
Route::post('/demo13', [FromDataController::class, 'DemoAction13']);
Route::get('/demo14', [FromDataController::class, 'DemoAction14']);
Route::get('/demo15', [FromDataController::class, 'DemoAction15']);
Route::get('/home', [FromDataController::class, 'home']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
