<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pids', function (Blueprint $table) {
            $table->increments('id');
            $table->float('Kp')->default(1);
            $table->float('Ki')->default(0);
            $table->float('Kd')->default(0);
            $table->float('Ts')->default(1);
            $table->float('SetPoint')->default(1);

            $table->integer('sensor_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('sensor_id')->references('id')->on('sensors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pids', function (Blueprint $table) {
            $table->dropForeign(['sensor_id']);
        });
        Schema::dropIfExists('pids');
    }
}
