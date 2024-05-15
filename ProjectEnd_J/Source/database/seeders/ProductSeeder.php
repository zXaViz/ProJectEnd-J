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
        DB::table('products')->insert([
            'id' => '4',
            'name' => 'Laptop MSI Gaming GF63 Thin 12UCX i5 12450H/16GB/512GB/4GB RTX2050/144Hz/Win11 (873VN)',
            'description' => 'Laptop MSI Gaming GF63 Thin 12UCX i5 12450H/16GB/512GB/4GB RTX2050/144Hz/Win11 (873VN)',
            'content' => 'Mẫu laptop Gaming "quốc dân" sở hữu mức giá thân thiện phù hợp với mọi game thủ, mang trong mình hiệu suất mạnh mẽ vượt trội cùng đa dạng các tính năng sử dụng. Laptop MSI Gaming GF63 Thin 12UCX i5 12450H (873VN) chắc chắn là sự lựa chọn tuyệt vời cho những buổi chiến game của bạn.',
            'menu_id' => '22',
            'price' => '18990000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/msi-gaming-gf63-thin-12ucx-i5-873vn-glr-3.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '5',
            'name' => 'Laptop MSI Prestige 14 Evo B13M i5 13500H/16GB/512GB/Balo/Win11 (401VN)',
            'description' => 'Laptop MSI Prestige 14 Evo B13M i5 13500H/16GB/512GB/Balo/Win11 (401VN)',
            'content' => 'Laptop MSI Prestige 14 Evo B13M i5 13500H (401VN) vừa sở hữu lối thiết kế sang trọng, linh hoạt, vừa mang trong mình hiệu năng mạnh mẽ của con chip Intel Gen 13, bộ nhớ RAM 16 GB cùng nhiều tính năng hiện đại đi kèm. Đây chắc chắn là một trong những mẫu laptop cao cấp - sang trọng đáng mua trên thị trường hiện nay.',
            'menu_id' => '22',
            'price' => '26990000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/vi-vn-msi-prestige-14-evo-b13m-i5-401vn-slider-1.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '6',
            'name' => 'Laptop MSI Modern 15 B7M R7 7730U/16GB/512GB/Win11 (238VN)',
            'description' => 'Laptop MSI Modern 15 B7M R7 7730U/16GB/512GB/Win11 (238VN)',
            'content' => 'Mẫu laptop học tập - văn phòng được thiết kế dành riêng cho người đi làm cũng như học sinh, sinh viên với thiết kế nhỏ gọn, tinh tế cùng hiệu năng mạnh mẽ với AMD Ryzen 7 7000 series đáp ứng mọi tác vụ hằng ngày. Laptop MSI Modern 15 B7M R7 7730U (238VN) sở hữu một mức giá lý tưởng chắc chắn sẽ là sản phẩm bạn không nên bỏ qua.',
            'menu_id' => '22',
            'price' => '16990000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/vi-vn-msi-modern-15-b7m-r7-238vn-slider-1.jpg',
        ]);

        ///
        DB::table('products')->insert([
            'id' => '6312312',
            'name' => 'Laptop MSI Modern 15 B7M R7 7730U/16GB/512GB/Win11 (238VN)',
            'description' => 'Laptop MSI Modern 15 B7M R7 7730U/16GB/512GB/Win11 (238VN)',
            'content' => 'Mẫu laptop học tập - văn phòng được thiết kế dành riêng cho người đi làm cũng như học sinh, sinh viên với thiết kế nhỏ gọn, tinh tế cùng hiệu năng mạnh mẽ với AMD Ryzen 7 7000 series đáp ứng mọi tác vụ hằng ngày. Laptop MSI Modern 15 B7M R7 7730U (238VN) sở hữu một mức giá lý tưởng chắc chắn sẽ là sản phẩm bạn không nên bỏ qua.',
            'menu_id' => '22',
            'price' => '16990000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/vi-vn-msi-modern-15-b7m-r7-238vn-slider-1.jpg',
        ]);

        DB::table('products')->insert([
            'id' => '321316',
            'name' => 'Laptop MSI Modern 15 B7M R7 7730U/16GB/512GB/Win11 (238VN)',
            'description' => 'Laptop MSI Modern 15 B7M R7 7730U/16GB/512GB/Win11 (238VN)',
            'content' => 'Mẫu laptop học tập - văn phòng được thiết kế dành riêng cho người đi làm cũng như học sinh, sinh viên với thiết kế nhỏ gọn, tinh tế cùng hiệu năng mạnh mẽ với AMD Ryzen 7 7000 series đáp ứng mọi tác vụ hằng ngày. Laptop MSI Modern 15 B7M R7 7730U (238VN) sở hữu một mức giá lý tưởng chắc chắn sẽ là sản phẩm bạn không nên bỏ qua.',
            'menu_id' => '22',
            'price' => '16990000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/vi-vn-msi-modern-15-b7m-r7-238vn-slider-1.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '312316',
            'name' => 'Laptop MSI Modern 15 B7M R7 7730U/16GB/512GB/Win11 (238VN)',
            'description' => 'Laptop MSI Modern 15 B7M R7 7730U/16GB/512GB/Win11 (238VN)',
            'content' => 'Mẫu laptop học tập - văn phòng được thiết kế dành riêng cho người đi làm cũng như học sinh, sinh viên với thiết kế nhỏ gọn, tinh tế cùng hiệu năng mạnh mẽ với AMD Ryzen 7 7000 series đáp ứng mọi tác vụ hằng ngày. Laptop MSI Modern 15 B7M R7 7730U (238VN) sở hữu một mức giá lý tưởng chắc chắn sẽ là sản phẩm bạn không nên bỏ qua.',
            'menu_id' => '22',
            'price' => '16990000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/vi-vn-msi-modern-15-b7m-r7-238vn-slider-1.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '6323213',
            'name' => 'Laptop MSI Modern 15 B7M R7 7730U/16GB/512GB/Win11 (238VN)',
            'description' => 'Laptop MSI Modern 15 B7M R7 7730U/16GB/512GB/Win11 (238VN)',
            'content' => 'Mẫu laptop học tập - văn phòng được thiết kế dành riêng cho người đi làm cũng như học sinh, sinh viên với thiết kế nhỏ gọn, tinh tế cùng hiệu năng mạnh mẽ với AMD Ryzen 7 7000 series đáp ứng mọi tác vụ hằng ngày. Laptop MSI Modern 15 B7M R7 7730U (238VN) sở hữu một mức giá lý tưởng chắc chắn sẽ là sản phẩm bạn không nên bỏ qua.',
            'menu_id' => '22',
            'price' => '16990000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/vi-vn-msi-modern-15-b7m-r7-238vn-slider-1.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '632',
            'name' => 'Laptop MSI Modern 15 B7M R7 7730U/16GB/512GB/Win11 (238VN)',
            'description' => 'Laptop MSI Modern 15 B7M R7 7730U/16GB/512GB/Win11 (238VN)',
            'content' => 'Mẫu laptop học tập - văn phòng được thiết kế dành riêng cho người đi làm cũng như học sinh, sinh viên với thiết kế nhỏ gọn, tinh tế cùng hiệu năng mạnh mẽ với AMD Ryzen 7 7000 series đáp ứng mọi tác vụ hằng ngày. Laptop MSI Modern 15 B7M R7 7730U (238VN) sở hữu một mức giá lý tưởng chắc chắn sẽ là sản phẩm bạn không nên bỏ qua.',
            'menu_id' => '22',
            'price' => '16990000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/vi-vn-msi-modern-15-b7m-r7-238vn-slider-1.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '6223',
            'name' => 'Laptop MSI Modern 15 B7M R7 7730U/16GB/512GB/Win11 (238VN)',
            'description' => 'Laptop MSI Modern 15 B7M R7 7730U/16GB/512GB/Win11 (238VN)',
            'content' => 'Mẫu laptop học tập - văn phòng được thiết kế dành riêng cho người đi làm cũng như học sinh, sinh viên với thiết kế nhỏ gọn, tinh tế cùng hiệu năng mạnh mẽ với AMD Ryzen 7 7000 series đáp ứng mọi tác vụ hằng ngày. Laptop MSI Modern 15 B7M R7 7730U (238VN) sở hữu một mức giá lý tưởng chắc chắn sẽ là sản phẩm bạn không nên bỏ qua.',
            'menu_id' => '22',
            'price' => '16990000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/vi-vn-msi-modern-15-b7m-r7-238vn-slider-1.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '62',
            'name' => 'Laptop MSI Modern 15 B7M R7 7730U/16GB/512GB/Win11 (238VN)',
            'description' => 'Laptop MSI Modern 15 B7M R7 7730U/16GB/512GB/Win11 (238VN)',
            'content' => 'Mẫu laptop học tập - văn phòng được thiết kế dành riêng cho người đi làm cũng như học sinh, sinh viên với thiết kế nhỏ gọn, tinh tế cùng hiệu năng mạnh mẽ với AMD Ryzen 7 7000 series đáp ứng mọi tác vụ hằng ngày. Laptop MSI Modern 15 B7M R7 7730U (238VN) sở hữu một mức giá lý tưởng chắc chắn sẽ là sản phẩm bạn không nên bỏ qua.',
            'menu_id' => '22',
            'price' => '16990000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/vi-vn-msi-modern-15-b7m-r7-238vn-slider-1.jpg',
        ]);
        ///




    }
}
