<?php

use Illuminate\Database\Seeder;

class FeedbackTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => Str::random(10),
            'address' => Str::random(10),
            'contactno' => Str::random(10),
            'comment' => Str::random(10),
            
        ]);
     

    }
}
