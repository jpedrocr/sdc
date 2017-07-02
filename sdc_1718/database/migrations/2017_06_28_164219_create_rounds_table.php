<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rounds', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('phase_id')->unsigned();
            $table->foreign('phase_id')->references('id')->on('phases');
            $table->integer('number')->unsigned();
            $table->integer('lap_id')->unsigned()->nullable();
            $table->foreign('lap_id')->references('id')->on('laps');
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
        Schema::drop('rounds');
    }
}
