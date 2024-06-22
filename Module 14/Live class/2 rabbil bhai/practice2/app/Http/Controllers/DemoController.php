<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    //Response Type String
    function demo1()
    {
        return "Response type String ";
    }

    //Response Type int
    function demo2()
    {
        return 100;
    }



    //Response Type null
    function demo3()
    {
        return null;
    }

    //Response Type Boolean
    function demo4()
    {
        return true; //true 1 false empty
    }


    //Response Type Array
    function demo5()
    {
        return array('a', 'b', 'c');
    }



    //Response Type Associative Array
    function demo6()
    {
        return array('a' => 1, 'b' => 2, 'c' => 3);
    }



    //Response Type json
    function demo7()
    {
        // return response()->json(array('a' => 1, 'b' => 2, 'c' => 3));
        return response()->json([['a' => 1, 'b' => 2, 'c' => 3], ['name' => 'Rohit']]);
    }

    //Response message,data,code
    function demo8()
    {
        return response()->json(['message' => 'Login success', 'data' => ['a' => 1, 'b' => 2, 'c' => 3]], 201);
    }

    //Response Redirect
    function demo9()
    {
        return redirect('/demo1Path');
    }

    //Binary File Response or file stream
    function demo10()
    {
        $path = "mod7.png";

        return response()->download($path);
    }

    //Response Type Download
    function demo11()
    {
        $path = "mod7.png";
        return response()->download($path);
    }

    //Response Cookies
    function demo12()
    {
        return response('say Hello ')->cookie('my-cookie-name', 'ostad all clear'); //name...value 
    }

    //attaching response headers
    function demo13()
    {
        return response('say Hello ')->header('my-token', 'ostad'); //name...value 
    }

    //Response view
    function demo14()
    {
        return view('home');
    }

    //Request url parameters
    function demo15(Request $request)
    {
        $a = $request->number1; //a holo variable ja khusi tay dibo but input er modde jeta seta route er id same nam hobe   
        $b = $request->number2; //b holo variable ja khusi tay dibo but input er modde jeta seta route er id same nam hobe 
        //$c = $a + $b;
        return $a + $b;
    }

    //Request Body json
    function demo16(Request $request)
    {
        $wholeBodyData = $request->input(); //catch full data 
        $a = $wholeBodyData['num1']; //catch one data 
        $b = $wholeBodyData['num2']; //catch another data
        return $a + $b;
    }

    //Request Headers
    function demo17(Request $request)
    {
        $a = $request->header('api-key');
        return $a;
    }


    //Request IP
    function demo18(Request $request)
    {
        $a = $request->ip();
        return $a;
    }

    //Request Cookies
    function demo19(Request $request)
    {
        $a = $request->cookie();
        return $a;
    }

    //Request cookie value
    function demo20(Request $request)
    {
        $a = $request->cookie('XSRF-TOKEN');
        return $a;
    }
}
