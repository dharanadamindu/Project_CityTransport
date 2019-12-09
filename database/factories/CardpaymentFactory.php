<?php

use Faker\Generator as Faker;

$factory->define(\App\Cardpayment::class, function (Faker $faker) {
    return [
        'cardNo' => $faker->creditCardNumber,
        'expire' => $faker->date,
        'cvv' => $faker->numberBetween($min = 124, $max = 999),
        'balance' => $faker->numberBetween($min = 124, $max = 9999),

        'user_id' => $faker->numberBetween($min = 0, $max = 20),
    ];
});
