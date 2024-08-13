<?php

use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/create-brand',[DemoController::class,'CreateBrand']);
Route::post('/update-brand/{id}',[DemoController::class,'UpdateBrand']);
Route::post('/create-update-brand/{brandName}',[DemoController::class,'UpdateOrCreateBrand']);
Route::get('/deleteBrand/{id}',[DemoController::class,'DeleteBrand']);
Route::get('/incrementDecrement',[DemoController::class,'incrementOrDecrement']);
Route::get('/dataShow',[DemoController::class,'dataShow']);
Route::get('/aggregates',[DemoController::class,'aggregates']);
Route::get('/selectUse',[DemoController::class,'selectUse']);
Route::get('/whereClause',[DemoController::class,'WhereClause']);
Route::get('/demoAction',[DemoController::class,'demoAction']);
Route::get('/paginate',[DemoController::class,'paginate']);