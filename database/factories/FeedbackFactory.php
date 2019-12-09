<?php

use Faker\Generator as Faker;

$factory->define(App\Feedback::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->lexify('???????????@gmail.com'),
        'contactno' => $faker->numberBetween($min = 0000000000, $max = 2147483647),
        'comment' => $faker->sentence($nbWords = 6, $variableNbWords = true),

        'user_id' => $faker->numberBetween($min = 0, $max = 20),
    ];



});
