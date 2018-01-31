<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSensorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sensors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nombre');
            $table->string('Tipo')->default('Continuo');
            //$table->geometry('Direccion')->nullable();
            $table->integer('sistema_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('sistema_id')->references('id')->on('sistemas')
                ->OnUpdate('cascade')->OnDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sistemas', function (Blueprint $table) {
            $table->dropForeign(['sistema_id']);
        });

        Schema::dropIfExists('sensors');
    }
}
