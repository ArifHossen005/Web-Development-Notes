<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;


Route::get('/', function () {
    return view('welcome');
});
Route::view("/loginForm", "forms.login");
Route::view("/contactForm", "forms.contact");
Route::view("/form", "forms.form")->name("form.get");

Route::post("/handleForm", [FormController::class, "handleFormSubmission"])->name("form.post");
