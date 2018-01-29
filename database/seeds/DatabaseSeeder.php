<?php

use Illuminate\Database\Seeder;
use App\User;

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
    }
}
