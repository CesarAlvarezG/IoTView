<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pid;
use App\sensor;
use Session;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class PidController extends Controller
{
    //
    public function create(Request $request)
    {
        $sensores=Sensor::all();
        return view('pid.create',['sensores'=>$sensores]);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
        'Kp' => 'required',
        'Ki' => 'required',
        'Kd' => 'required',
        'Ts' => 'required',
        'sensor_id'=>'required',
        ]);
        $input = $request->all();
        Pid::create($input);
        Session::flash('flash_message', 'Controlador PID agregado exitosamente!');
        return redirect('/home');
    }
    public function index(Request $request)
    {
        $pids = Pid::all();
        $sensores=Sensor::all();
        return view('pid.index', ['list' => $pids,'sensores'=>$sensores]);
    }
    public function show(Request $request,$id)
    {
        try{
            $pid = Pid::findOrFail($id);
            $sensor=Sensor::find($pid->sensor_id);
            return view('pid.show',['data'=>$pid,'sensor'=>$sensor]);
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message',"El control PID ($id) no se ha encontrado");
            return redirect()->back();
        }
    }
    public function edit(Request $request, $id)
    {
        try{
            $pid=Pid::findOrFail($id);
            $sensores=Sensor::all();
            return view('pid.edit',['data'=>$pid,'sensores'=>$sensores]);
        }catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message',"El control PID ($id) no pudo ser editado");
            return redirect()->back();
        }
    }
    public function update(Request $request,$id)
    {
        try{
            $pid=Pid::findOrFail($id);
            $this->validate($request, [
                'Kp' => 'required',
                'Ki' => 'required',
                'Kd' => 'required',
                'Ts' => 'required',
        ]);
        $input = $request->all();
        $pid->fill($input)->save();
        Session::flash('flash_message', 'Controlador PID exitosamente editado!');
        return redirect('/home');
        }catch(ModelNotFoundExcetion $e)
        {
            Session::flash('flash_message','El controlador PID ($id) no pudo ser editado');
            return redirect()->back();
        }
    }
    public function destroy(Request $request, $id)
    {
        try
        {
            $pid = Pid::findOrFail($id);
            $pid->delete();
            Session::flash('flash_message', 'Controlador PID correctamente borrado!');
            return redirect('/home');
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message', "El controlador PID ($id) no fue borrado!");
            return redirect()->back();
        }
    }
}
