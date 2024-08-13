<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/create-brand',[DemoController::class,'CreateBrand']);
Route::post('/update-brand/{id}',[DemoController::class,'UpdateBrand']);
Route::post('/create-update-brand/{brandName}',[DemoController::class,'UpdateOrCreateBrand']);
Route::get('/deleteBrand/{id}',[DemoController::class,'DeleteBrand']);
Route::get('/incrementDecrement',[DemoController::class,'incrementOrDecrement']);
Route::get('/dataShow',[DemoController::class,'dataShow']);
Route::get('/aggregates',[DemoController::class,'aggregates']);
Route::get('/selectUse',[DemoController::class,'selectUse']);