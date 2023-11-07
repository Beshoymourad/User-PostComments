<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run()
    {


        User::create([
            'name' => 'Beshoy',
            'email' => 'Beshoy@example.com',
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'George',
            'email' => 'George@example.com',
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Mina',
            'email' => 'Mina@example.com',
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
        ]);
    }

}
