<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
            'id' => '1',
            'name' => 'Điện Thoại',
            'url' => 'http://127.0.0.1:8000/danh-muc/1-dien-thoai.html',
            'thumb' => '/template/images/slide-smartphone.jpg',
            'sort_by' => '1',
            'active' => '1',
        ]);
        DB::table('sliders')->insert([
            'id' => '2',
            'name' => 'Laptop',
            'url' => 'http://127.0.0.1:8000/danh-muc/2-laptop.html',
            'thumb' => '/template/images/slide-laptop.jpg',
            'sort_by' => '2',
            'active' => '1',
        ]);
        DB::table('sliders')->insert([
            'id' => '3',
            'name' => 'Smartwatch',
            'url' => 'http://127.0.0.1:8000/danh-muc/5-smartwatch.html',
            'thumb' => '/template/images/slide-smartwatch.jpg',
            'sort_by' => '3',
            'active' => '1',
        ]);
        DB::table('sliders')->insert([
            'id' => '4',
            'name' => 'Phụ Kiện',
            'url' => 'http://127.0.0.1:8000/danh-muc/3-phu-kien.html',
            'thumb' => '/template/images/slide-phukien.jpg',
            'sort_by' => '4',
            'active' => '1',
        ]);

        DB::table('sliders')->insert([
            'id' => '5',
            'name' => 'Tablet',
            'url' => 'http://127.0.0.1:8000/danh-muc/4-tablet.html',
            'thumb' => '/template/images/slide-tablet.jpg',
            'sort_by' => '5',
            'active' => '1',
        ]);
    }
}
