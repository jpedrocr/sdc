<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ranks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('phase_id')->unsigned()->unique();
            $table->foreign('phase_id')->references('id')->on('phases');
            $table->integer('sport_team_id')->unsigned()->unique();
            $table->foreign('sport_team_id')->references('id')->on('sport_teams');
            $table->integer('order')->unsigned()->unique();
            $table->integer('initial_order')->unsigned()->unique()->nullable();
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
        Schema::drop('ranks');
    }
}
