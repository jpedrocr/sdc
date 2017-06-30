<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelevantEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relevant_events', function (Blueprint $table) {
            $table->increments('id');
            $table->date('event_date')->nullable();
            $table->string('alternative_date')->nullable();
            $table->string('description');
            $table->integer('sport_organization_id')->unsigned();
            $table->foreign('sport_organization_id')->references('id')->on('sport_organizations');
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
        Schema::drop('relevant_events');
    }
}
