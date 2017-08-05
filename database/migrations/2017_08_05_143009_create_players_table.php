<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 32);
            $table->string('portrait', 200);
            $table->json('photo');
            $table->float('level', 3, 2)->default(1.00);
            $table->integer('participation_in_game')->default(0);
            $table->json('other_name');
            $table->text('description');
            $table->integer('good_people')->default(0);
            $table->integer('wolf')->default(0);
            $table->integer('logic')->default(0);
            $table->integer('express')->default(0);
            $table->integer('understanding')->default(0);
            $table->integer('cheat')->default(0);
            $table->integer('watch_water')->default(0)->comment('prove_good? watch_water is Okay, I like it');
            $table->integer('face_to_face')->default(0);
            $table->integer('out_of_game')->default(0);
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
        Schema::dropIfExists('player');
    }
}
