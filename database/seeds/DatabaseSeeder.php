<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        \App\User::create([
            'name' => "memotiur",
            'email' => "memotiur@gmail.com",
            'password' => \Illuminate\Support\Facades\Hash::make('123456')
        ]);
        \App\User::create([
            'name' => "Saiful",
            'email' => "saiful013101@gmail.com",
            'password' => \Illuminate\Support\Facades\Hash::make('1234')
        ]);


        // $this->call(UsersTableSeeder::class);
    }
}
