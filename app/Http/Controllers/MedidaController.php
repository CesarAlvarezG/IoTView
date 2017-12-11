<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\medida;
use Session;

class MedidaController extends Controller
{
    //
    public function create(Request $request)
    {
        return view('medida.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
        'valor' => 'required',
        ]);
        $input = $request->all();
        Medida::create($input);
        Session::flash('flash_message', 'Sistema agregado exitosamente!');
        return redirect('/home');
    }
}
