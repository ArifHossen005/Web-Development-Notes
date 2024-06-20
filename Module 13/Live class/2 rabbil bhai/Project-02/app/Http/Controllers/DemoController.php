<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function demo1()
    {
        return "Response Hello World1";
    }

    public function demo2()
    {
        return "Response Hello World2";
    }

    public function demo3()
    {
        return "Response Hello World3";
    }

    public function demo4()
    {
        return response()->json([
            'name'=>'ostad',
            'Batch'=>'03',
            'Course'=>'Laravel'
        ]);
    }
}
