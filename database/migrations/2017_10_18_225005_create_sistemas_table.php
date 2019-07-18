<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSistemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sistemas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nombre',66);
            $table->string('Descripcion',66);
            $table->string('Confirmacion',12)->nullable();
            //Variables internas
            $table->string('NVar',16)->nullable();
            $table->float('Var',8,2)->nullable();
            $table->string('NMensaje',66)->nullable();
            $table->string('Mensaje',66)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sistemas');
    }
}
