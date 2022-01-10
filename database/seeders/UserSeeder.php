<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => 'Fatih Tuzlu',
            'email' => 'fatihtuzlu07@gmail.com',
            'email_verified_at' => now(),
            'type' =>'admin',
            'password' => '$2y$10$OlL5itg0M5afsqq9H4GH7.vrb0KotUi34s0sN7IPN303QWo32Sk.6', // password
            'remember_token' => Str::random(10),
        ]);

        \App\Models\User::factory(5)->create();
    }
}
