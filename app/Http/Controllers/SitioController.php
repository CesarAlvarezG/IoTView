<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitioController extends Controller
{
    //
    public function view()
    {
        return view('PublicGraf/PagePublic');
    }

    public function viewprivate(Request $request, $canal)
    {
        return view('PrivateGraf/PagePrivate',['elCanal'=>$canal]);
    }
}
