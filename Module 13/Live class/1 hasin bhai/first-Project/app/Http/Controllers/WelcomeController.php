<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function sayHello()
    {
        return "hello world 1234567890";
    }


    public function courseName()
    {
        return "laravel learning ostad platform";
    }
}
