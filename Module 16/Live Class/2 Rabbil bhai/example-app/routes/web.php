<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Route::get('/home', [HomeController::class, 'Homepage']);
Route::get('/main', function () {
    return view('main');
});
