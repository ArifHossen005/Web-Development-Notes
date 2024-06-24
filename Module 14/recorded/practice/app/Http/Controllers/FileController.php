<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    // 13 [Response] Binary And File Download Response
    function FileBinary()
    {
        $filePath = 'uploads/2.png';
        return response()->file($filePath); //shows binary file

    }

    function FileDownload()
    {
        $filePath = 'uploads/2.png';
        return response()->download($filePath); //shows download file

    }
}
