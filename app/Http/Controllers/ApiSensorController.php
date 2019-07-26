<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sistema;
use App\medida;
use App\sensor;
use App\pid;

class ApiSensorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try{
            $sens=Sensor::findOrFail($id);
            $sens->pids;
            return response()->json($sens);
            }
            catch(ModelNotFoundException $e)
                {
                    return response()->json(['error'=>true, 'msg'=>'Sesnsor no encontrado' ], 404);
                }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $ojo =json_decode($id);
        }
        catch(ModelNotFoundException $e){
            return response()->json(['error'=>true, 'msg'=>'Json no decodificado' ], 404);
        }
        try{

            $sen=Sistema::findOrFail($ojo->id);
            $sen->Var=$ojo->Var;
            $sens->Mensaje=$ojo->Mensaje;
            $sens->save();
            foreach($ojo->pids as $pid)
            {
                try{
                    $pido=Sensor::findOrFail($pid->id);
                    $pido->kp=$pid->kp;
                    $pido->ki=$pid->ki;
                    $pido->kd=$pid->kd;
                    $pido->Ts=$pid->Ts;
                    $pido->SetPoint=$pid->SetPoint;
                    $pido->save();
                }catch(ModelNotFoundException $e)
                {
                    return response()->json(['error'=>true, 'msg'=>'Pid no encontrado' ], 404);
                }
            }
        return $id;
        }catch(ModelNotFoundException $e)
        {
            return response()->json(['error'=>true, 'msg'=>'Sensor no encontrado' ], 404);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
