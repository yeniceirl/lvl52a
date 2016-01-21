<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('date');
            $table->string('stadium');
        });

        Schema::create('match_team', function (Blueprint $table) {
            $table->integer('match_id')->unsigned()->index();
            $table->foreign('match_id')->references('id')->on('matches');

            $table->integer('team_id')->unsigned()->index();
            $table->foreign('team_id')->references('id')->on('teams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('match_team');
        Schema::drop('matches');
    }
}
