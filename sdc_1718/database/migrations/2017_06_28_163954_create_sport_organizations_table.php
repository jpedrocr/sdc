<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSportOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sport_organizations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('alternate_name')->unique()->nullable();
            $table->string('legal_name')->unique()->nullable();
            $table->date('founding_date')->nullable();
            $table->string('image')->nullable();
            $table->string('address')->nullable();
            $table->string('email')->nullable();
            $table->string('telephone')->nullable();
            $table->integer('fax_number')->nullable();
            $table->string('url')->nullable();
            $table->string('slug')->unique();
			$table->integer('fpb_id')->unsigned()->unique()->nullable();
			$table->integer('sport_organization_type_id')->unsigned()->nullable();
			$table->foreign('sport_organization_type_id')->references('id')->on('sport_organization_types');
            $table->integer('sport_venue_id')->unsigned()->nullable();
            $table->foreign('sport_venue_id')->references('id')->on('sport_venues');
            $table->integer('member_of')->unsigned()->nullable();
            $table->foreign('member_of')->references('id')->on('sport_organizations');
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
        Schema::drop('sport_organizations');
    }
}
