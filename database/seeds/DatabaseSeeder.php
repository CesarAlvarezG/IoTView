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
        User::create(array('name'=>'SuperAdmin','email'=>'ejemplo@correo.com','password'=>'123456','role'=>'1','Direccion'=>'Calle real'));
    }
}
