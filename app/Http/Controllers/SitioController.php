<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitioController extends Controller
{
    //
    public function view()
    {
        echo "Hola Mundo";
    }

    public function viewprivate(Request $request, $canal)
    {
        echo "Canal =". $canal;
    }
}
