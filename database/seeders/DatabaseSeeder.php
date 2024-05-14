<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            'name' => 'minhhuyen',
            'email' => 'minhhuyen0205@gmail.com',
            'password' => Hash::make('02052002'),
            'role' => '2',
            'phone' => '0334340937',
            'avatar' => 'huyen.jpg',
        ]);


        // Products
        DB::table('products')->insert([
            [

                'brand_id' => 1,
                'product_category_id' => 2,
                'name' => 'Pure Pineapple',
                'description' => 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor sit amet, consectetur adipisicing elit, sed do mod tempor',
                'product_image' => 'laptop.png',
                'content' => '',
                'price' => 629.99,
                'discount' => 495,
                'tag' => 'Clothing',
            ],
            [

                'brand_id' => 2,
                'product_category_id' => 2,
                'name' => 'Guangzhou sweater',
                'description' => 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod',
                'product_image' => 'mobile-phone.png',
                'content' => null,
                'price' => 35,
                'discount' => 13,
                'tag' => 'Clothing',
            ],
            [

                'brand_id' => 3,
                'product_category_id' => 2,
                'name' => 'Guangzhou sweater',
                'description' => 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod',
                'product_image' => 'smartwatch.png',
                'content' => null,
                'price' => 35,
                'discount' => 34,
                'tag' => 'Clothing',
            ],
            [

                'brand_id' => 4,
                'product_category_id' => 1,
                'name' => 'Microfiber Wool Scarf',
                'description' => 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod',
                'product_image' => 'tuxedo.png',
                'content' => null,
                'price' => 44,
                'discount' => 35,
                'tag' => 'Accessories',
            ],
            [

                'brand_id' => 1,
                'product_category_id' => 3,
                'name' => "Men's Painted Hat",
                'description' => 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod',
                'product_image' => 'dress.png',
                'content' => null,
                'price' => 44,
                'discount' => 35,
                'tag' => 'Accessories',
            ],
            
        ]);

    }
}