<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Guesser\Name;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@localhost.com',
            'password' => bcrypt('password'),
            'status' => 'admin'
        ]);


        User::create(
            [
            'name' => 'Member',
            'email' => 'Member@localhost.com',
            'password' => bcrypt('password'),
            'status' => 'member'
            ]
        );
    }
}
