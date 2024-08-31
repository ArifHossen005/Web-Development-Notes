<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AppController extends Controller
{
    function publicMessage()
    {
        return response("this is for everyone ",200);
    }
    function secretMessage()
    {   
        
        return response("This is for logged in user ");
    }
}
