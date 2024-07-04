<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;

class DemoController extends Controller
{
    public function DemoAction1(Request $request)
    {
        $num1 = $request->num1;
        $num2 = $request->num2;
        $sum = $num1 + $num2;
        Log::emergency($sum);
        return $sum;
    }

    public function SessionPut(Request $request): bool
    {
        $email = $request->email;
        $request->session()->put('UserEmail', $email); //key value pair

        return true;
    }

    public function SessionPull(Request $request): string
    {
        return $request->session()->pull('UserEmail');
    }

    public function SessionGet(Request $request): string
    {
        return $request->session()->get('UserEmail');
    }

    public function SessionForget(Request $request): bool
    {
        $request->session()->forget('UserEmail');
        return true;
    }

    public function SessionFlush(Request $request): bool
    {
        $request->session()->flush();
        return true;
    }
}
