<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSportCompetitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sport_competitions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('alternate_name')->nullable();
            $table->string('image')->nullable();
            $table->string('slug')->unique();
            $table->integer('fpb_id')->unsigned()->unique()->nullable();
            $table->integer('age_gender_group_id')->unsigned();
            $table->foreign('age_gender_group_id')->references('id')->on('age_gender_groups');
            $table->integer('competition_level_id')->unsigned();
            $table->foreign('competition_level_id')->references('id')->on('competition_levels');
            $table->integer('sport_season_id')->unsigned();
            $table->foreign('sport_season_id')->references('id')->on('sport_seasons');
            $table->integer('sport_modality_id')->unsigned();
            $table->foreign('sport_modality_id')->references('id')->on('sport_modalities');
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
        Schema::drop('sport_competitions');
    }
}
