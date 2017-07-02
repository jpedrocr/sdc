<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamAssistantRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_assistant_registrations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('team_assistant_id')->unsigned();
            $table->foreign('team_assistant_id')->references('id')->on('team_assistants');
            $table->integer('sport_team_id')->unsigned();
            $table->foreign('sport_team_id')->references('id')->on('sport_teams');
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
        Schema::drop('team_assistant_registrations');
    }
}
