<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function dashboard()
    {
        $name = "Arif Doe Doe";
        $email = "arifsohag@example.com";
        return view('dashboard.dashboard', compact('name', 'email')); //one way to data pass to view,ekhane variable er  nam ja setay compact er vitore asbe
        //return view('dashboard.dashboard', ['namView' => $name, 'mailView' => $email]); //another  way to data pass to view
    }

    public function homePage()
    {
        return view('dashboard.home');
    }
}
