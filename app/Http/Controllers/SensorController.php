<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sensor;
use Session;

class SensorController extends Controller
{
    //
    public function create(Request $request)
    {
        return view('sensor.create');
    }
  public function store(Request $request)
    {
        $this->validate($request, [
        'Nombre' => 'required | string | max:66',
        'Tipo' =>'required',
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
}
