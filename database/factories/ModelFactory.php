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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'level' => $faker->randomElement(['user', 'admin']),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Player::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'no' => $faker->randomDigit(),
        'pos' => $faker->randomElement(['Defenders', 'Midfielders', 'Forwards']),
        'gs' => random_int(0, 10),
    ];
});
