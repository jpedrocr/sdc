<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoachRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coach_registrations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sport_team_id')->unsigned()->unique();
            $table->foreign('sport_team_id')->references('id')->on('sport_teams');
            $table->integer('coach_id')->unsigned()->unique();
            $table->foreign('coach_id')->references('id')->on('coaches');
            $table->integer('coach_role_id')->unsigned()->unique();
            $table->foreign('coach_role_id')->references('id')->on('coach_roles');
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
        Schema::drop('coach_registrations');
    }
}
