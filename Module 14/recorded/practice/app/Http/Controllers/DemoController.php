<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    // 1 [Request] Simple Request
    function DemoAction1()
    {
        return "This  is my first request Response from laravel";
    }

    // 2 [Request] Working With Request Parameters
    function DemoAction2(Request $request): string
    {
        $n = $request->name;
        $a = $request->age;

        return "My name is ${n} and my age is ${a}";
    }


    // 3 [Request] Working With Request JSON Body
    function DemoAction3(Request $request): array
    {
        //$n = $request->name;
        //$a = $request->age;
        $n = $request->input('name');
        $a = $request->input('age');
        $c = $request->input(); //all data in array

        // return "My name is ${n} and my age is ${a}";
        return $c;
    }



    // 4 [Request] Working With Request Header
    function DemoAction4(Request $request): array
    {
        return $request->header(); // all data show 
        //$n = $request->header('name'); //return type string korte hobe 
        //$a = $request->header('age');

        // return "My name is ${n} and my age is ${a}";
    }

    // 5 [Request] Working With Request Header Body Params
    function DemoAction5(Request $request): array
    {
        $pin        = $request->header('pin');
        $city       = $request->input('city');
        $postcode   = $request->input('postcode');
        $name       = $request->name;
        $age        = $request->age;

        return compact('pin', 'city', 'postcode', 'name', 'age');
    }
}
