<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\medida;
use App\sensor;

class SitioController extends Controller
{
    //
    public function view()
    {
        try{
            $medida=Medida::orderBy('created_at','desc')->first();
            return view('PublicGraf/PagePublic',['medida'=>$medida]);
        }catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message',"La pagina publica no puede ser vista");
            return redirect()->back();
        }
    }

    public function viewprivate(Request $request, $canal)
    {
        try{
            $medidas=Sensor::find($canal)->medidas;
            $elSensor=Sensor::find($canal);
            return view('PrivateGraf/PagePrivate',['elCanal'=>$elSensor,'medidas'=>$medidas]);
        }catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message',"El canal ($id) no puede ser vista");
            return redirect()->back();
        }
    }
}
