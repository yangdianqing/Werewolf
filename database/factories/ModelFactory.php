<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'account' => $faker->name,
        'nickname' => $faker->name,
        'account_type' => \App\Library\App\Config::ACCOUNT_TYPE,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Post::class, function ($faker) {
    return [
        'title' => $faker->title,
        'content' => $faker->paragraph,
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        }
    ];
});

$factory->define(\App\Model\Player::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
        'portrait' => '',
        'photo' => [],
        'other_name' => [],
        'description'=> $faker->realText(),
    ];
});