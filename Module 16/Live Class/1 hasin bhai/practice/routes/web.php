<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ExtraController;
use App\Http\Controllers\MiddleWareController;
use App\Http\Middleware\SecretMiddleware;


Route::get('/', function () {
    return view('welcome');
});
Route::view("/loginForm", "forms.login");
Route::view("/contactForm", "forms.contact");
Route::view("/form", "forms.form")->name("form.get");

Route::post("/handleForm", [FormController::class, "handleFormSubmission"])->name("form.post");
Route::get("/showForm", [ExtraController::class, "showForm"])->name("showForm");
Route::post("/newForm", [ExtraController::class, "checkValidation"])->name("newForm.post");

//middleware 

Route::get('/hello', [MiddleWareController::class, 'hello'])->middleware('auth');

Route::get('/hello4', [
    MiddleWareController::class,
    'hello4'
])->middleware(SecretMiddleware::class);



Route::middleware(['throttle:5,1'])->group(function () {
    Route::get('/hello2', [MiddleWareController::class, 'hello2']); //5 request per 1 minute
    Route::get('/hello3', [MiddleWareController::class, 'hello3']); //5 request per 1 minute
});
