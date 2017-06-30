<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoardRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('board_registrations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('board_id')->unsigned();
            $table->foreign('board_id')->references('id')->on('boards');
            $table->integer('biennium_id')->unsigned();
            $table->foreign('biennium_id')->references('id')->on('biennia');
            $table->integer('board_member_id')->unsigned();
            $table->foreign('board_member_id')->references('id')->on('board_members');
            $table->integer('board_role_id')->unsigned();
            $table->foreign('board_role_id')->references('id')->on('board_roles');
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
        Schema::drop('board_registrations');
    }
}
