<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index($id = 1) // this is use route parameter same to same
    {
        return 'Article ID = ' . $id;
    }

    function articles($pageNumber, $type)
    {
        return 'Page Number = ' . $pageNumber . ' Type = ' . $type;
    }

    /*
    public function show($pageNumber)
    {
        $perPage = request()->input('perPage', 10);
        $sort = request()->input('sort', 'asc');

        return 'Page Number = ' . $pageNumber . ' Per Page = ' . $perPage . ' Sort = ' . $sort;
    }
    */
    //another ways 
    public function show($pageNumber, Request $request)
    {
        $perPage = $request->input('perPage', 10);
        $sort = $request->input('sort', 'asc');

        return 'Page Number = ' . $pageNumber . ' Per Page = ' . $perPage . ' Sort = ' . $sort;
    }
}
