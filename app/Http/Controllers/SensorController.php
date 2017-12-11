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
        'name' => 'required | string | alpha_dash | max:66',
        ]);
        $input = $request->all();
        Sensor::create($input);
        Session::flash('flash_message', 'Sensor exitosamente creado!');
        return redirect('/home');
    }

}
