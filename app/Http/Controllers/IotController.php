<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IotController extends Controller
{
    //
    public function leer(Request $request)
    {
        echo $request;
    }
    public function escribir(Request $request)
    {
        echo $request;
    }
}
