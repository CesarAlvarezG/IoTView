<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\medida;
use App\sensor;

class IotController extends Controller
{
    //
    public function leer(Request $request)
    {
        $medida=Medida::orderBy('created_at','desc')->first();
        echo $medida->valor;
    }
    public function escribir(Request $request,$sensor,$medida)
    {
        //$elsensor=Sensor::find($sensor);
        //$elsensor::medidas()->create('valor'->$medida);
        Medida::create(array('valor'=>$medida,'sensor_id'=>$sensor));
        echo 200;
    }

}
