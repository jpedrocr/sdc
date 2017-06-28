<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSportTeamRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sport_team_registrations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sport_team_id')->unsigned()->unique();
            $table->foreign('sport_team_id')->references('id')->on('sport_teams');
            $table->integer('sport_competition_id')->unsigned()->unique();
            $table->foreign('sport_competition_id')->references('id')->on('sport_competitions');
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
        Schema::drop('sport_team_registrations');
    }
}
