<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QueryController extends Controller
{
    function index()
    {
        return response("Hello Query ");
    }
}
