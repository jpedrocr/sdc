<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAthleteRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('athlete_registrations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('athlete_id')->unsigned();
            $table->foreign('athlete_id')->references('id')->on('athletes');
            $table->integer('sport_team_id')->unsigned();
            $table->foreign('sport_team_id')->references('id')->on('sport_teams');
            $table->integer('athlete_role_id')->unsigned();
            $table->foreign('athlete_role_id')->references('id')->on('athlete_roles');
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
        Schema::drop('athlete_registrations');
    }
}
