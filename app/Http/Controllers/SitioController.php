<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\medida;
use App\sensor;
use App\sistema;
use Session;

class SitioController extends Controller
{

    public function view()
    {
        $sistemas=Sistema::All();
        if($sistemas->count()>0)
        {
            return view('PublicGraf/PagePublic',['sistemas'=>$sistemas]);
        }else{
            Session::flash('flash_message',"No hay sistemas creados");
            return redirect()->back();
            }

    }

    public function viewsistemas(Request $request)
    {
        $sistemas=Sistema::All();
        if($sistemas->count()>0)
        {
            return view('PrivateGraf/PagePrivateSistemas',['sistemas'=>$sistemas]);
        }
        else{
            Session::flash('flash_message',"No hay sistemas creados");
            return redirect()->back();
        }
    }

    public function viewsistema(Request $request,$canal)
    {
        $sistema=Sistema::find($canal);
        $sensores = Sistema::find($canal)->sensors()->get();
        if($sensores->count()>0)
        {
            return view('PrivateGraf/PagePrivateSistema',['sistema'=>$sistema,'sensores'=>$sensores]);
        }
        else{
            Session::flash('flash_message',"No hay sensores en el sistema");
            return redirect()->back();
        }
    }


    public function viewsensor(Request $request,$canal)
    {
        $sensor=Sensor::find($canal);
        $medidas=Sensor::find($canal)->medidas()->get();
        if($medidas->count()>0)
        {
            return view('PrivateGraf/PagePrivateSensor',['sensor'=>$sensor,'medidas'=>$medidas]);
        }
        else{
            Session::flash('flash_message',"No hay medidas en el sensor");
            return redirect()->back();
        }
    }

}
