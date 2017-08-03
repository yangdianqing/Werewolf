<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBehaviourCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('behaviour_comment', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->float('user_player_level_when_post');
            $table->integer('user_compatibility_when_post');
            $table->integer('behaviour_id');
            $table->integer('to_comment')->default(0);
            $table->string('description', 500);
            $table->integer('good_benefit');
            $table->integer('wolf_benefit');
            $table->integer('feasibility');
            $table->integer('support');
            $table->boolean('has_logical_error')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('behaviour_comment');
    }
}
