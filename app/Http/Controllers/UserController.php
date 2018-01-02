<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;

class UserController extends Controller
{
    //
    public function create(Request $request)
    {
        return view('user.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required | string | alpha_dash | max:66',
            'email' => 'required | email| unique:users',
            'Direccion' => 'required | string | alpha_dash | max:66',
            'password' => 'required | string | min:8 | max:64',
        ]);
        $input = $request->all();
        User::create($input);
        Session::flash('flash_message', 'Usuario exitosamente agregado!');
        return redirect('/home');
    }
    public function index(Request $request)
    {
        $users = User::all();
        return view('user.index', ['list' => $users]);
    }
}
