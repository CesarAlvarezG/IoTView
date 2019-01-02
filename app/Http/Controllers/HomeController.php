<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\medida;
use App\sensor;
use App\sistema;
use App\pid;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=user::All()->count();
        $sistemas=Sistema::All()->count();
        $sensores=Sensor::All()->count();
        $pids=Pid::All()->count();
        $medidas=Medida::All()->count();

        return view('home',['users'=>$users,'sistemas'=>$sistemas,'sensores'=>$sensores,'pids'=>$pids,'medidas'=>$medidas]);

    }
}
