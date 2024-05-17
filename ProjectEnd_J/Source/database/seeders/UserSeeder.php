<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('123456'),
            'role' => '2',
            'phone' => '0334340937',
            'avatar' => 'avatar.png',
        ]);
        for ($i = 0; $i < 35; $i++) {
            DB::table('users')->insert([
                'name' => 'trieu',
                'email' => 'trieu2012@gmail.com',
                'password' => Hash::make('02052002'),
                'role' => '1',
                'phone' => '0334340937',
                'avatar' => 'avatar.png',
            ]);
        }
    }
}
