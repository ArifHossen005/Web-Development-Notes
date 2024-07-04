<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function Homepage()
    {
        $num1 = 5;
        $num2 = 0;
        $sum = $num1 + $num2;
        return view('home', ['marks' => $sum]);
    }
}
