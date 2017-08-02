<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_score', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('experience')->default(0);
            $table->tinyInteger('level')->default(1);
            $table->integer('principle_num')->default(0);
            $table->integer('contribution_value')->default(0);
            $table->tinyInteger('contribution_level')->default(1);
            $table->integer('civilization_value')->default(0);
            $table->tinyInteger('civilization_level')->default(1);
            $table->float('player_level', 3, 2)->default(1.00);
            $table->integer('compatibility')->default(50);
            $table->integer('prophet')->default(0);
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
        Schema::dropIfExists('user_score');
    }
}
