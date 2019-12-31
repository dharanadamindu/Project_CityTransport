<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        factory(App\User::class,20)->create();
//        factory(App\Bus::class,20)->create();
//        factory(App\Employee::class,20)->create();
//        factory(App\Fair::class,20)->create();
//        factory(App\Nearby::class,20)->create();
//        factory(App\RouteR::class,20)->create();



//        factory(App\Feedback::class,20)->create();
//
//        factory(App\Cardpayment::class,20)->create();
        factory(App\Halt::class,20)->create();
//        factory(App\Seat::class,20)->create();


//        factory(App\Routetime::class,20)->create();


    }
}
