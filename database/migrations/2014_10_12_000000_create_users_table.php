<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('account', 32);
            $table->string('password');
            $table->char('salt', 10)->default('');
            $table->string('account_type', 20);
            $table->tinyInteger('status')->default(0);
            $table->string('nickname',32);
            $table->char('phone', 11)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('portrait', 500)->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
