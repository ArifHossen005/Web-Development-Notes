<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController1 extends Controller
{
    function DemoAction1(): string
    {
        return "Demo Action 1";
    }

    function DemoAction2(): string
    {
        return "Demo Action 2 ";
    }

    function DemoAction3(): string
    {
        return "Demo Action 3 ";
    }

    function DemoAction4(): string
    {
        return "Demo Action 4 ";
    }
}
