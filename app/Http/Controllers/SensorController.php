<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sensor;
use App\sistema;
use Session;
use Illuminate\Database\Eloquent\ModelNotFoundException;

function generateRandomString($length = 10) {
    return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
}


class SensorController extends Controller
{
    //
    public function create(Request $request)
    {
        $sistemas=Sistema::all();
        $token=generateRandomString();
        return view('sensor.create',['sistemas'=>$sistemas,'token'=>$token]);
    }
  public function store(Request $request)
    {
        $this->validate($request, [
        'Nombre' => 'required | string | max:66',
        'Tipo' =>'required',
        'sistema_id'=>'required',
        ]);
        $input = $request->all();
        Sensor::create($input);
        Session::flash('flash_message', 'Sensor exitosamente creado!');
        return redirect('/home');
    }
    public function index(Request $request)
    {
        $sensors = Sensor::all();
        return view('sensor.index', ['list' => $sensors]);
    }
    public function show(Request $request,$id)
    {
        try{
            $sensor = Sensor::findOrFail($id);
            return view('sensor.show',['data'=>$sensor]);
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message',"El sensor ($id) no se ha encontrado");
            return redirect()->back();
        }
    }
    public function edit(Request $request, $id)
    {
        try{
            $sensor=Sensor::findOrFail($id);
            $sistemas=Sistema::all();
            return view('sensor.edit',['data'=>$sensor,'sistemas'=>$sistemas]);
        }catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message',"El sensor ($id) no pudo ser editado");
            return redirect()->back();
        }
    }
    public function update(Request $request,$id)
    {
        try{
            $sensor=Sensor::findOrFail($id);
            $this->validate($request, [
                'Nombre' => 'required | string | max:66',
                'Tipo' =>'required',
                'sistema_id'=>'required',
        ]);
        $input = $request->all();
        $sensor->fill($input)->save();
        Session::flash('flash_message', 'Sensor exitosamente editado!');
        return redirect('/home');
        }catch(ModelNotFoundExcetion $e)
        {
            Session::flash('flash_message','El sensor ($id) no pudo ser editado');
            return redirect()->back();
        }
    }
    public function destroy(Request $request, $id)
    {
        try
        {
            $sensor = Sensor::findOrFail($id);
            $sensor->delete();
            Session::flash('flash_message', 'Sensor correctamente borrado!');
            return redirect('/home');
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message', "El sensor ($id) no fue borrado!");
            return redirect()->back();
        }
    }
}
