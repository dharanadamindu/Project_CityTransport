<?php

use Illuminate\Database\Seeder;

class NearbyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Shop::class,2000)->create();
    }
}
