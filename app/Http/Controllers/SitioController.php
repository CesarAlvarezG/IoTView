<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Pid;
use App\medida;
use App\sensor;
use App\sistema;
use App\User;

use Session;

class SitioController extends Controller
{

    public function view()
    {
        $sistemas=Sistema::All();
        $nSist=$sistemas->count();
        $usuarios=User::All();
        $nUsua=$usuarios->count();
        $sensores=Sensor::All();
        $nSen=$sensores->count();
        $pids=Pid::All();
        $nPid=$pids->count();

        if($sistemas->count()>0)
        {
            return view('PublicGraf/PagePublic',['sistemas'=>$sistemas,'nSist'=>$nSist,'nUsua'=>$nUsua,'nSen'=>$nSen,'nPid'=>$nPid]);
        }else{
            Session::flash('flash_message',"No hay sistemas creados");
            return redirect()->back();
            }

    }

    public function viewsistemas(Request $request)
    {
        $sistemas=Sistema::All();
        $sistemas=Sistema::All();
        $nSist=$sistemas->count();
        $usuarios=User::All();
        $nUsua=$usuarios->count();
        $sensores=Sensor::All();
        $nSen=$sensores->count();
        $pids=Pid::All();
        $nPid=$pids->count();

        if($sistemas->count()>0)
        {
            return view('PrivateGraf/PagePrivateSistemas',['sistemas'=>$sistemas,'nSist'=>$nSist,'nUsua'=>$nUsua,'nSen'=>$nSen,'nPid'=>$nPid]);
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
        $user = Auth::user();
        $pids=Pid::All();
        if($sensores->count()>0)
        {
            return view('PrivateGraf/PagePrivateSistema',['sistema'=>$sistema,'sensores'=>$sensores,'user'=>$user,'pids'=>$pids]);
        }
        else{
            Session::flash('flash_message',"No hay sensores en el sistema");
            return redirect()->back();
        }
    }


    public function viewsensor(Request $request,$canal)
    {
        $sensor=Sensor::find($canal);
        $medidas=Sensor::find($canal)->Var;
        return $medidas;
    }
}
