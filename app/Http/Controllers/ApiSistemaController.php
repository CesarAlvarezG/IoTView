<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sistema;
use App\Medida;
use App\Sensor;
use App\Pid;

use Illuminate\Database\Eloquent\ModelNotFoundException;


class ApiSistemaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sistemas=Sistema::all();
        return response()->json($sistemas);
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
            $sist=Sistema::findOrFail($id);
            $sist->sensors;
            return response()->json($sist);
            }
            catch(ModelNotFoundException $e)
                {
                    return response()->json(['error'=>true, 'msg'=>'Sistema no encontrado' ], 404);
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

            $sist=Sistema::findOrFail($ojo->id);
            $sist->Var=$ojo->Var;
            $sist->Mensaje=$ojo->Mensaje;
            $sist->save();
            foreach($ojo->sensors as $sen)
            {
                try{
                    $senso=Sensor::findOrFail($sen->id);
                    $senso->Var=$sen->Var;
                    $senso->Mensaje=$sen->Mensaje;
                    $senso->save();
                }catch(ModelNotFoundException $e)
                {
                    return response()->json(['error'=>true, 'msg'=>'Sensor no encontrado' ], 404);
                }
            }
        return $id;
        }catch(ModelNotFoundException $e)
        {
            return response()->json(['error'=>true, 'msg'=>'Sistema no encontrado' ], 404);
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
