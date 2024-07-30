<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
//use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/task', [TaskController::class, 'doSomething']);
//Route::get('/showData', [TaskController::class, 'index']);
//Route::get('/updateData', [TaskController::class, 'updateSomething']);
//Route::get('/showSingle1/{id}', [TaskController::class, 'showSingleDate1']);
////laravel route model binding
//Route::get('/showSingle2/{task}', [TaskController::class, 'showSingleDate2']);


//Resouces Controller sathe rout er connection

Route::resource('tasks',TaskController::class);

