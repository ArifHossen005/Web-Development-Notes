<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function DemoAction1(): string
    {
        return "Hello World";
    }
    public function DemoAction2(): string
    {
        return "Hello World22";
    }
    public function DemoAction3(): string
    {
        return "Hello World333";
    }
}
