<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sistema;
use Session;
use Illuminate\Database\Eloquent\ModelNotFoundException;

function generateRandomString($length = 10) {
    return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
}


class SistemaController extends Controller
{
    //
    public function create(Request $request)
    {
        $token=generateRandomString();
        return view('sistema.create',['token'=>$token]);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
        'Nombre' => 'required | string | max:66',
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
    public function destroy(Request $request, $id)
    {
        try
        {
            $sistema = Sistema::findOrFail($id);
            $sistema->delete();
            Session::flash('flash_message', 'Sistema correctamente borrado!');
            return redirect('/home');
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message', "El sistema ($id) no fue borrado!");
            return redirect()->back();
        }
    }
}
