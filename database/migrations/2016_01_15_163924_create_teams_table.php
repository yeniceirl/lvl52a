<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('flag');
            $table->char('group',1);
            $table->tinyInteger('mp')->default(0);
            $table->tinyInteger('mw')->default(0);
            $table->tinyInteger('md')->default(0);
            $table->tinyInteger('ml')->default(0);
            $table->tinyInteger('gf')->default(0);
            $table->tinyInteger('ga')->default(0);
            $table->tinyInteger('gd')->default(0);
            $table->tinyInteger('pt')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('teams');
    }
}
