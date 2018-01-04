<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\medida;
use Session;
use Illuminate\Database\Eloquent\ModelNotFoundException;

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
        Session::flash('flash_message', 'Medida agregada exitosamente!');
        return redirect('/home');
    }
    public function index(Request $request)
    {
        $medidas = Medida::all();
        return view('medida.index', ['list' => $medidas]);
    }
    public function show(Request $request,$id)
    {
        try{
            $medida = Medida::findOrFail($id);
            return view('medida.show',['data'=>$medida]);
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message',"La medida ($id) no se ha encontrado");
            return redirect()->back();
        }
    }
}
