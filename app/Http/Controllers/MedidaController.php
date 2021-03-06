<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\medida;
use App\sensor;
use Session;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class MedidaController extends Controller
{
    //
    public function create(Request $request)
    {
        $sensores=Sensor::all();
        return view('medida.create',['sensores'=>$sensores]);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
        'valor' => 'required',
        'sensor_id'=>'required',
        ]);
        $input = $request->all();
        Medida::create($input);
        Session::flash('flash_message', 'Medida agregada exitosamente!');
        return redirect('/home');
    }
    public function index(Request $request)
    {
        $medidas = Medida::all();
        $sensores=Sensor::all();
        return view('medida.index', ['list' => $medidas,'sensores'=>$sensores]);
    }
    public function show(Request $request,$id)
    {
        try{
            $medida = Medida::findOrFail($id);
            $sensor=Sensor::find($medida->sensor_id);
            return view('medida.show',['data'=>$medida,'sensor'=>$sensor]);
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message',"La medida ($id) no se ha encontrado");
            return redirect()->back();
        }
    }
    public function edit(Request $request, $id)
    {
        try{
            $medida=Medida::findOrFail($id);
            $sensores=Sensor::all();
            return view('medida.edit',['data'=>$medida,'sensores'=>$sensores]);
        }catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message',"La medida ($id) no pudo ser editada");
            return redirect()->back();
        }
    }
    public function update(Request $request,$id)
    {
        try{
            $medida=Medida::findOrFail($id);
            $this->validate($request, [
                'valor' => 'required',
        ]);
        $input = $request->all();
        $medida->fill($input)->save();
        Session::flash('flash_message', 'Medida exitosamente editada!');
        return redirect('/home');
        }catch(ModelNotFoundExcetion $e)
        {
            Session::flash('flash_message','La medida ($id) no pudo ser editada');
            return redirect()->back();
        }
    }
    public function destroy(Request $request, $id)
    {
        try
        {
            $medida = Medida::findOrFail($id);
            $medida->delete();
            Session::flash('flash_message', 'Medida correctamente borrada!');
            return redirect('/home');
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message', "La medida ($id) no fue borrada!");
            return redirect()->back();
        }
    }
}
