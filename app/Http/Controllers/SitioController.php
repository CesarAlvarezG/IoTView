<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\medida;

class SitioController extends Controller
{
    //
    public function view()
    {
        return view('PublicGraf/PagePublic');
    }

    public function viewprivate(Request $request, $canal)
    {
        try{
            $medidas=Medida::all();
            return view('PrivateGraf/PagePrivate',['elCanal'=>$canal,'medidas'=>$medidas]);
        }catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message',"El canal ($id) no puede ser vista");
            return redirect()->back();
        }
    }
}
