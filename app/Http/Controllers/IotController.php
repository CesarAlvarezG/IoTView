<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\medida;

class IotController extends Controller
{
    //
    public function leer(Request $request)
    {
        $medida=Medida::orderBy('created_at','desc')->first();
        echo $medida->valor;
    }
    public function escribir(Request $request)
    {
        echo $request;
    }

}
