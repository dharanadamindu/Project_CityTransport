<?php

use Faker\Generator as Faker;

$factory->define(App\Employee::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'address' => $faker->lexify('???????????@gmail.com'),
        'role' => $faker->randomElement($array = array ('Conductor','Customer','Driver')),
        'nic' => $faker->numberBetween($min = 1111111111, $max = 2147483647) ,
        'gender' => $faker->randomElement($array = array ('m','f')),
        'contactno' => $faker->numberBetween($min = 0111111111, $max = 2147483647),
        // 'contactno' => $faker->numberBetween($min = 1000, $max = 9000),
        // 'contactno' => $faker->phoneNumber,
        'bdate' => $faker ->date($format = 'Y-m-d', $max = 'now'),
    ];
        


});