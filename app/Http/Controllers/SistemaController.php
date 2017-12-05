<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sistema;
use Session;

class SistemaController extends Controller
{
    //
    public function create(Request $request)
    {
        return view('Sistema.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
        'Nombre' => 'required | string | alpha_dash | max:66',
        'Descripcion' => 'required | string | alpha_dash | max:66',
        ]);
        $input = $request->all();
        sistema::create($input);
        Session::flash('flash_message', 'Sistema agregado exitosamente!');
        return redirect('/home');
    }
}
