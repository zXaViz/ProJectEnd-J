<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            'id' => '1',
            'name' => 'Tien',
            'phone' => '0988707802',
            'address' => 'TPHCM',
            'email' => 'tien@gmail.com',
            'content' => 'admin',
        ]);
    }
}
