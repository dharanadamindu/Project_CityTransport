<?php

use Faker\Generator as Faker;

$factory->define(App\Nearby::class, function (Faker $faker) {
    return [
        'name'=> $faker->company,
       'description'=>$faker->text(200),
       'city'=>$faker->city,
    //    'state'=>$faker->state,
    //    'zip'=>$faker->postcode,
       'address'=>$faker->address,
       'lat'=>$faker->latitude(5.5,9.5),
       'lng' => $faker->longitude(79.75583, 81.01197)
    ];
});
