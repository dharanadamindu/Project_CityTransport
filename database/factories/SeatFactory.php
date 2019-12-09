<?php

use Faker\Generator as Faker;

$factory->define(\App\Seat::class, function (Faker $faker) {
    return [
        'date' => $faker->date,
        'seatNo' => $faker->numberBetween($min = 124, $max = 999),
        'status' => $faker->numberBetween($min = 0, $max = 1),
        'comment' => text(rand(10,20)),

        'user_id' => $faker->numberBetween($min = 0, $max = 20),
        'bus_id' => $faker->numberBetween($min = 0, $max = 20),
    ];
});
