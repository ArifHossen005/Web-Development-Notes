<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FromDataController extends Controller
{
    // 6 [Request] Working With Form Data

    function DemoAction6(Request $request): array
    {
        $photoFile = $request->file('photo');
        $photoSize = filesize($photoFile);
        $photoType = filetype($photoFile);
        $photoOriginalName = $photoFile->getClientOriginalName();
        $temporaryFileName = $photoFile->getFilename();
        $extension = $photoFile->extension();

        return compact('photoSize', 'photoType', 'photoOriginalName', 'temporaryFileName', 'extension');
    }

    // 7 [Request] Working With File Upload

    function DemoAction7(Request $request): bool
    {
        $photoFile = $request->file('photo'); //file receivwd korlam 
        $photoFile->move(public_path('uploads'), $photoFile->getClientOriginalName());
        $photoFile->storeAs('uploads', $photoFile->getClientOriginalName());
        return true;
    }



    // 8 [Request] IP Address And Content

    function DemoAction8(Request $request): array
    {
        $ip = $request->ip();
        $content = $request->getAcceptableContentTypes();
        return compact('ip', 'content');
    }


    // 9 [Request] Working With Request Cookie


    function DemoAction9(Request $request): array
    {

        return $request->cookie();
    }

    // 14 [Response] Cookie Response

    function DemoAction14(Request $request)
    {
        $name = "cookie_1";
        $value = "this is my data";
        $minutes = 60;
        $path = "/";
        $domain = $_SERVER['SERVER_NAME'];
        $secure = true;
        $httpOnly = true;
        return response("hello world")->cookie($name, $value, $minutes, $path, $domain, $secure, $httpOnly);
    }


    // 15 [Response] Response Header

    function DemoAction15(Request $request)
    {
        $name = "keyHeader";
        $value = "this is my data";
        return response("hello world header")
            ->header($name, $value)
            ->header('key2', 'value2')
            ->header('key3', 'value3');
    }

    //16 [Response] Response View

    function home()
    {

        return view('home.home');
    }
}

//sob data re dhorar jonno array noile string use korte hobe