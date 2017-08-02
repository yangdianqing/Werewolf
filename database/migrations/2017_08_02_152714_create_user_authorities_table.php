<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAuthoritiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_authority', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->json('access');
            $table->json('review');
            $table->json('eatabish');
            $table->json('remove');
            $table->json('post');
            $table->json('comment');
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
        Schema::dropIfExists('user_authority');
    }
}
