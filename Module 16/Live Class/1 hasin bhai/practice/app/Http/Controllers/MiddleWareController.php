<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiddleWareController extends Controller
{
    public function hello()
    {
        return "hello this is middle Ware";
    }

    public function hello2(Request $request)
    {
        return "hello this is middle Ware2";
    }

    public function hello3()
    {
        return "hello this is middle Ware3";
    }

    public function hello4()
    {
        return "hello this is middle ware4";
    }
}
