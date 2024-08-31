<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\TaskController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//AppController 

Route::get('/public',[AppController::class,'publicMessage']);
Route::get('/secret',[AppController::class,'secretMessage'])->middleware('auth');
Route::get('/tasks',[TaskController::class,'index'])->name('tasks.index')->middleware('auth');
Route::post('/store',[TaskController::class,'store'])->name('tasks.store')->middleware('auth');
Route::delete('/tasks/{task}',[TaskController::class,'destroy'])->name('tasks.destroy')->middleware('auth');









require __DIR__.'/auth.php';
