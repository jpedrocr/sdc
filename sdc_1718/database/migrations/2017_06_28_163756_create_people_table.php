<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
            $table->string('given_name');
            $table->string('additional_name')->nullable();
            $table->string('family_name');
            $table->string('honorific_prefix')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('nationality')->nullable();
            $table->enum('gender', ['-', 'Female', 'Male']);
            $table->string('image')->nullable();
            $table->string('email')->nullable();
            $table->string('telephone')->nullable();
            $table->string('slug')->unique();
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
        Schema::drop('people');
    }
}
