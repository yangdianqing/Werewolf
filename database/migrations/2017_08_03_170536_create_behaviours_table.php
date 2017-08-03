<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBehavioursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('behaviour', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pre_behaviour_id')->default(0);
            $table->string('title');
            $table->text('description');
            $table->float('level', 3 ,2)->default(1.00);
            $table->integer('good_benefit')->default(0);
            $table->integer('wolf_benefit')->default(0);
            $table->integer('comment_num')->default(0);
            $table->integer('feasibility')->default(0);
            $table->boolean('is_official')->default(false);
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
        Schema::dropIfExists('behaviour');
    }
}
