<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carts')->insert([
            'id' => '1',
            'customer_id' => '1',
            'product_id' => '1',
            'pty' => '2',
            'price' => '2000000',
        ]);
    }
}
