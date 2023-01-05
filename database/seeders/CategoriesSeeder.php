<?php

namespace Database\Seeders;

use App\Models\categories;
use App\Models\categories_image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { {
            categories::create(
                [
                    'category_img' => 'koreancake.jpg',
                    'category_name' => 'Korean Cake',
                    'category_desc' => 'description',
                    'category_price' => 'none'
                ]
            );


            categories::create(
                [
                    'category_img' => 'bentocake.jpg',
                    'category_name' => 'Bento Cake',
                    'category_desc' => 'description',
                    'category_price' => 'Rp.75,000-'
                ]

                
            );
            categories::create(
                [
                    'category_img' => 'cakepotong.jpg',
                    'category_name' => 'Cake Potong',
                    'category_desc' => 'description',
                    'category_price' => 'none'
                ]

                
            );
            categories::create(
                [
                    'category_img' => 'spikoe.jpg',
                    'category_name' => 'Spikoe',
                    'category_desc' => 'description',
                    'category_price' => '22cm 2 Lapis : Rp.150,000- / 22cm 3 Lapis : Rp.195,000-'
                ]

                
            );
            
        }
    }
}
