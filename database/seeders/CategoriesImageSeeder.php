<?php

namespace Database\Seeders;

use App\Models\categories_image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        
        categories_image::create([
                'category_images_name' => 'Bento Cake IMG',
                'category_images_img' => 'bento1.jpg',
                'categories_id' => '2',
        ]);

        categories_image::create([
                'category_images_name' => 'Bento Cake IMG',
                'category_images_img' => 'bento2.jpg',
                'categories_id' => '2',
        ]);

        categories_image::create([
                'category_images_name' => 'Bento Cake IMG',
                'category_images_img' => 'bento3.jpg',
                'categories_id' => '2',
        ]);

        categories_image::create([
                'category_images_name' => 'Bento Cake IMG',
                'category_images_img' => 'bento4.jpg',
                'categories_id' => '2',
        ]);

        categories_image::create([
                'category_images_name' => 'Cake Potong IMG',
                'category_images_img' => 'potong1.jpg',
                'categories_id' => '3',
        ]);

        categories_image::create([
                'category_images_name' => 'Cake Potong IMG',
                'category_images_img' => 'potong2.jpg',
                'categories_id' => '3',
        ]);

        categories_image::create([
                'category_images_name' => 'Cake Potong IMG',
                'category_images_img' => 'potong3.jpg',
                'categories_id' => '3',
        ]);

        categories_image::create([
                'category_images_name' => 'Spikoe IMG',
                'category_images_img' => 'spikoe1.jpg',
                'categories_id' => '4',
        ]);

        categories_image::create([
            'category_images_name' => 'Korean Cake IMG',
            'category_images_img' => 'korean1.jpg',
            'categories_id' => '1',
        ]);

        categories_image::create([
            'category_images_name' => 'Korean Cake PriceList',
            'category_images_img' => 'kp1.jpg',
            'categories_id' => '1',
        ]);

        categories_image::create([
            'category_images_name' => 'Korean Cake PriceList',
            'category_images_img' => 'kp2.jpg',
            'categories_id' => '1',
        ]);

        categories_image::create([
            'category_images_name' => 'Korean Cake PriceList',
            'category_images_img' => 'kp3.jpg',
            'categories_id' => '1',
        ]);

        categories_image::create([
            'category_images_name' => 'Korean Cake PriceList',
            'category_images_img' => 'kp4.jpg',
            'categories_id' => '1',
        ]);

        categories_image::create([
            'category_images_name' => 'Korean Cake PriceList',
            'category_images_img' => 'kp5.jpg',
            'categories_id' => '1',
        ]);

        categories_image::create([
            'category_images_name' => 'Cake Potong PriceList',
            'category_images_img' => 'pp1.jpg',
            'categories_id' => '3',
        ]);

        categories_image::create([
            'category_images_name' => 'Cake Potong PriceList',
            'category_images_img' => 'pp2.jpg',
            'categories_id' => '3',
        ]);

        categories_image::create([
            'category_images_name' => 'Cake Potong PriceList',
            'category_images_img' => 'pp3.jpg',
            'categories_id' => '3',
        ]);

        categories_image::create([
            'category_images_name' => 'Cake Potong PriceList',
            'category_images_img' => 'pp4.jpg',
            'categories_id' => '3',
        ]);

        categories_image::create([
            'category_images_name' => 'Cake Potong PriceList',
            'category_images_img' => 'pp5.jpg',
            'categories_id' => '3',
        ]);
    }
}
