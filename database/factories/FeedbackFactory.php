<?php

use Faker\Generator as Faker;

$factory->define(App\Feedback::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        // 'address' => $faker->unique()->safeEmail,
        'email' => $faker->lexify('???????????@gmail.com'),
        'contactno' => $faker->numberBetween($min = 0000000000, $max = 2147483647),
        // 'contactno' => $faker->numberBetween($min = 1000, $max = 9000),
        // 'contactno' => $faker->phoneNumber,
        
        'comment' => $faker->sentence($nbWords = 6, $variableNbWords = true),
    ];
        


});