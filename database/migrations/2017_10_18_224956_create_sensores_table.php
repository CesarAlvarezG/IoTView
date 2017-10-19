<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSensoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sensores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nombre',66);
            $table->enum('Tipo',['Continuo','Discreto']);
            $table->geometry('Direccion');
            $table->integer('medida_id')->unsigned();
            $table->timestamps();

            $table->foreign('medida_id')->references('id')->on('medidas')
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
        Schema::table('sensore', function (Blueprint $table) {
            $table->dropForeign(['medida_id']);
        });

        Schema::dropIfExists('sensores');
    }
}
