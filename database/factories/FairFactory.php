<?php

use Faker\Generator as Faker;

$factory->define(\App\Fair::class, function (Faker $faker) {
    return [
        'from' => $faker->city,
        'to' => $faker->city,
        'bfair' => $faker->numberBetween($min = 11, $max = 214),
        'duration' => $faker->numberBetween($min = 124, $max = 999),
    ];
});
