<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'id' => '1',
            'name' => 'Samsung Galaxy S23 Ultra 5G 256GB',
            'description' => 'Samsung Galaxy S23 Ultra 5G 256GB',
            'content' => 'Samsung Galaxy S23 Ultra 5G 256GB là chiếc smartphone cao cấp nhất của nhà Samsung,
             sở hữu cấu hình không tưởng với con chip khủng được Qualcomm tối ưu riêng cho dòng Galaxy và camera lên đến 200 MP,
            xứng danh là chiếc flagship Android được mong đợi nhất trong năm 2023.',
            'menu_id' => '11',
            'price' => '25000000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/samsung-galaxy-s23-ultra-1-2.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '2',
            'name' => 'Samsung Galaxy S23 FE 5G 128GB',
            'description' => 'Samsung Galaxy S23 FE 5G 128GB',
            'content' => 'Samsung tiếp tục chiếm lĩnh thị trường điện thoại thông minh với sự xuất hiện của Samsung Galaxy S23 FE 5G.
             Điện thoại này được trang bị camera 50 MP có khả năng quay video 8K, màn hình 120 Hz.
             Với những tính năng này, hứa hẹn sẽ mang đến trải nghiệm tuyệt vời, đáp ứng mọi nhu cầu của người dùng.',
            'menu_id' => '11',
            'price' => '14890000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/samsung-galaxy-s23-fe-xanh-1.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '3',
            'name' => 'Samsung Galaxy S24 Ultra 5G 256GB',
            'description' => 'Samsung Galaxy S24 Ultra 5G 256GB',
            'content' => 'Samsung Galaxy S24 Ultra mẫu điện thoại cao cấp được ra mắt vào đầu năm 2024, sản phẩm tiếp tục kế thừa và cải tiến từ thế hệ trước. Điểm đặc biệt là sử dụng chip Snapdragon 8 Gen 3 for Galaxy, camera 200 MP và tích hợp nhiều tính năng AI.',
            'menu_id' => '11',
            'price' => '33990000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/samsung-galaxy-s24-ultra-xam-1.jpg',
        ]);
    }
}
