<?php

namespace Database\Seeders;

use App\Models\testimony;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        testimony::create([
                'testimony_image' => 'testimony1.jpg'
        ]);
        
        testimony::create([
                'testimony_image' => 'testimony2.jpg'
        ]);

        testimony::create([
                'testimony_image' => 'testimony3.jpg'
        ]);

        testimony::create([
                'testimony_image' => 'testimony4.jpg'
        ]);

        testimony::create([
                'testimony_image' => 'testimony5.jpg'
        ]);

        testimony::create([
                'testimony_image' => 'testimony6.jpg'
        ]);

        testimony::create([
                'testimony_image' => 'testimony7.jpg'
        ]);
    }
}
