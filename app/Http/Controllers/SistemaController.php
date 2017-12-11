<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sistema;
use Session;

class SistemaController extends Controller
{
    //
    public function create(Request $request)
    {
        return view('sistema.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
        'Nombre' => 'required | string | alpha_dash | max:66',
        'Descripcion' => 'required | string | alpha_dash | max:66',
        ]);
        $input = $request->all();
        Sistema::create($input);
        Session::flash('flash_message', 'Sistema agregado!');
        return redirect('/home');
    }
}
