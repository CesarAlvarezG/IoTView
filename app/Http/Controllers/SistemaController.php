<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sistema;
use Session;
use Illuminate\Database\Eloquent\ModelNotFoundException;

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
        'Descripcion' => 'required | string | max:66',
        ]);
        $input = $request->all();
        Sistema::create($input);
        Session::flash('flash_message', 'Sistema agregado!');
        return redirect('/home');
    }
    public function index(Request $request)
    {
        $sistemas = Sistema::all();
        return view('sistema.index', ['list' => $sistemas]);
    }
    public function show(Request $request,$id)
    {
        try{
            $sistema = Sistema::findOrFail($id);
            return view('sistema.show',['data'=>$sistema]);
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message',"El sistema ($id) no se ha encontrado");
            return redirect()->back();
        }
    }
    public function edit(Request $request, $id)
    {
        try{
            $sistema=Sistema::findOrFail($id);
            return view('sistema.edit',['data'=>$sistema]);
        }catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message',"El sistema ($id) no pudo ser editado");
            return redirect()->back();
        }
    }
    public function update(Request $request,$id)
    {
        try{
            $sistema=Sistema::findOrFail($id);
            $this->validate($request, [
                'Nombre' => 'required | string ',
                'Descripcion' => 'required | string | max:66',
        ]);
        $input = $request->all();
        $sistema->fill($input)->save();
        Session::flash('flash_message', 'Sistema exitosamente editado!');
        return redirect('/home');
        }catch(ModelNotFoundExcetion $e)
        {
            Session::flash('flash_message','El sistema ($id) no pudo ser editado');
            return redirect()->back();
        }
    }
}
