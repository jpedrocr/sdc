<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSponsorTeamPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sponsor_team', function (Blueprint $table) {
            $table->integer('sponsor_id')->unsigned()->index();
            $table->foreign('sponsor_id')->references('id')->on('sponsors')->onDelete('cascade');
            $table->integer('sport_team_id')->unsigned()->index();
            $table->foreign('sport_team_id')->references('id')->on('sport_teams')->onDelete('cascade');
            $table->primary(['sponsor_id', 'sport_team_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sponsor_team');
    }
}
