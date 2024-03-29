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

$factory->define(App\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => Hash::make('123456'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Post::class, function ($faker) {
    return [
        'title' => $faker->sentence(),
        'body' => $faker->realText(),
        'category_id' => rand(1,4),
        'user_id' => rand(1,5),
    ];
});

$factory->define(App\Category::class, function ($faker) {
    return [
        'name' => $faker->word(),
    ];
});