<?php

use Faker\Generator as Faker;

$factory->define(App\RouteR::class, function (Faker $faker) {
    return [
        'routeNo' => $faker->numberBetween($min = 0, $max = 900),
        // 'address' => $faker->unique()->safeEmail,
        'startLocation' => $faker->city,
        'endLocation' => $faker->city,
        'halts' => $faker->text($maxNbChars = 180) ,
        // 'halts' => $faker->randomElement($array = array ('aas','bd','cdd')),
        // 'contactno' => $faker->numberBetween($min = 1000, $max = 9000),
        // 'contactno' => $faker->phoneNumber,

        'distance' => $faker->numberBetween($min = 0, $max = 200),
    ];



});
