<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ArticleController;
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
/*
Route::get('/hello', function () {
    return 'Hello World laravel';
});
*/
Route::get('/hello/ostad', function () {
    return 'Hello World ostad';
});

Route::get('hello', [WelcomeController::class, 'sayHello']);
Route::get('course', [WelcomeController::class, 'courseName']);
Route::get('/dashboard', [DashboardController::class, 'dashboard']);
Route::get('/home', [DashboardController::class, 'homePage']);
Route::get('/article/{id?}', [ArticleController::class, 'index']);
Route::get('/article/page/{pageNumber}/display/{type}', [ArticleController::class, 'articles']);
Route::get('/article/page/{pageNumber}', [ArticleController::class, 'show']);
