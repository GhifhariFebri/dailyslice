<?php

namespace Database\Seeders;

use App\Models\admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        admin::create([
            'admin_username' => 'admin',
            'admin_email' => 'admin@gmail.com',
            'admin_password' => 'adminpwd'
        ]);
    }
}
