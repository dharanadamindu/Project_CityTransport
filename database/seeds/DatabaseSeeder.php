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
        // $this->call(UsersTableSeeder::class);
        // DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => bcrypt('secret'),
        // ]);
        
        factory(App\User::class,5)->create();

        factory(App\Feedback::class,5)->create();

        factory(App\Route_r::class,5)->create();

        factory(App\Employee::class,5)->create();

        // DB::table('feedback')->insert([
        //     'name' => Str::random(10),
        //     'address' => Str::random(10).'@gmail.com',
        //     'contactno' => Str::random(10),
        //     'comment' => Str::random(10),

        // ]);
        



    }
}
