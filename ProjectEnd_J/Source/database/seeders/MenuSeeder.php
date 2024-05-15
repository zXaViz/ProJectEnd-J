<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            'id' => '1',
            'name' => 'Điện Thoại',
            'parent_id' => '0',
            'description' => 'Điện Thoại',
            'content' => 'Điện Thoại',
            'slug' => 'Điện Thoại',
            'active' => '1',
        ]);
        DB::table('menus')->insert([
            'id' => '2',
            'name' => 'Laptop',
            'parent_id' => '0',
            'description' => 'Laptop',
            'content' => 'Laptop',
            'slug' => 'Laptop',
            'active' => '1',
        ]);
        DB::table('menus')->insert([
            'id' => '3',
            'name' => 'Phụ Kiện',
            'parent_id' => '0',
            'description' => 'Phụ Kiện',
            'content' => 'Phụ Kiện',
            'slug' => 'Phụ Kiện',
            'active' => '1',
        ]);
        DB::table('menus')->insert([
            'id' => '11',
            'name' => 'SamSung',
            'parent_id' => '1',
            'description' => 'SamSung',
            'content' => 'SamSung',
            'slug' => 'SamSung',
            'active' => '1',
        ]);
        DB::table('menus')->insert([
            'id' => '22',
            'name' => 'Laptop MSI',
            'parent_id' => '2',
            'description' => 'Laptop MSI',
            'content' => 'Laptop MSI',
            'slug' => 'Laptop MSI',
            'active' => '1',
        ]);
        DB::table('menus')->insert([
            'id' => '33',
            'name' => 'AirPods',
            'parent_id' => '3',
            'description' => 'AirPods',
            'content' => 'AirPods',
            'slug' => 'AirPods',
            'active' => '1',
        ]);
    }
}
