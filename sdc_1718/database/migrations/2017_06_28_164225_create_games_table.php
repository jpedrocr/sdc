<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('round_id')->unsigned()->unique();
            $table->foreign('round_id')->references('id')->on('rounds');
            $table->integer('fpb_id')->unsigned()->unique()->nullable();
            $table->datetime('schedule')->nullable();
			$table->integer('sport_team_home_id')->unsigned()->unique()->nullable();
            $table->foreign('sport_team_home_id')->references('id')->on('sport_teams');
			$table->integer('sport_team_out_id')->unsigned()->unique()->nullable();
            $table->foreign('sport_team_out_id')->references('id')->on('sport_teams');
            $table->integer('result_home')->nullable();
            $table->integer('result_out')->nullable();
            $table->integer('sport_venue_id')->unsigned()->unique()->nullable();
            $table->foreign('sport_venue_id')->references('id')->on('sport_venues');
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
        Schema::drop('games');
    }
}
