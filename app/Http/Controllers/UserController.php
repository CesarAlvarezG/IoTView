<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
use Illuminate\Database\Eloquent\ModelNotFoundException;

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
            'name' => 'required | string  | max:66',
            'email' => 'required | email| unique:users',
            'Direccion' => 'required | string | max:66',
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
    public function show(Request $request,$id)
    {
        try{
            $user = User::findOrFail($id);
            return view('user.show',['data'=>$user]);
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message',"El usuario ($id) no se ha encontrado");
            return redirect()->back();
        }
    }
    public function edit(Request $request, $id)
    {
        try{
            $user=User::findOrFail($id);
            return view('user.edit',['data'=>$user]);
        }catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message',"El usuario ($id) no pudo ser editado");
            return redirect()->back();
        }
    }
    public function update(Request $request,$id)
    {
        try{
            $user=User::findOrFail($id);
            $this->validate($request, [
                'name' => 'required | string',
                'email' => 'required | email',
                'Direccion' => 'required',
                'password' => 'required | string | min:8 | max:64',
        ]);
        $input = $request->all();
        $user->fill($input)->save();
        Session::flash('flash_message', 'Usuario exitosamente editado!');
        return redirect('/home');
        }catch(ModelNotFoundExcetion $e)
        {
            Session::flash('flash_message','El usuario ($id) no pudo ser editado');
            return redirect()->back();
        }
    }
    public function destroy(Request $request, $id)
    {
        try
        {
            $user = User::findOrFail($id);
            $user->delete();
            Session::flash('flash_message', 'Usuario correctamente borrado!');
            return redirect('/home');
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message', "El usuario ($id) no fue borrado!");
            return redirect()->back();
        }
    }
}
