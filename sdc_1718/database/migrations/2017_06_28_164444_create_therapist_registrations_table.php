<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTherapistRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('therapist_registrations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('therapist_id')->unsigned();
            $table->foreign('therapist_id')->references('id')->on('therapists');
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
        Schema::drop('therapist_registrations');
    }
}
