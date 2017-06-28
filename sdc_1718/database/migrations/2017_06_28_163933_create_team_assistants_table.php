<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamAssistantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_assistants', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('person_id')->unsigned()->unique();
            $table->foreign('person_id')->references('id')->on('people');
            $table->integer('license')->unsigned()->unique()->nullable();
            $table->integer('fpb_id')->unsigned()->unique()->nullable();
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
        Schema::drop('team_assistants');
    }
}
