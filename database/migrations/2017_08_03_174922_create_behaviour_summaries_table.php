<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBehaviourSummariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('behaviour_summarie', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('behaviour_id');
            $table->string('conclusion', 200);
            $table->text('description');
            $table->integer('feasibility');
            $table->integer('support');
            $table->boolean('has_logical_error')->default(false);
            $table->timestamps();
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
        Schema::dropIfExists('behaviour_summarie');
    }
}
