<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Sistema;
use App\Sensor;
use App\Pid;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        User::create(array('name'=>'Admin','email'=>'admin@correo.com','password'=>'12345678','role'=>'1','Direccion'=>'Armenia'));
        Sistema::create(array('Nombre'=>'Iot Prueba','Descripcion'=>'Prueba de envio y recepcion de datos por la API','Confirmacion'=>'RphPq81BeT','NVar'=>'VarPrueba','Var'=>'1','NMensaje'=>'Estado','Mensaje'=>'ok'));
        Sensor::create(array('Nombre'=>'Rampa','Tipo'=>'Sensor','NVar'=>'Dato recibido','Var'=>'0','NMensaje'=>'Estado','Mensaje'=>'ok','sistema_id'=>'1','SetPoint'=>'0'));
    }
}
