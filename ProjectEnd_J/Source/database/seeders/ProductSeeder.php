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
            'id' => '7',
            'name' => 'Điện thoại iPhone 15 Pro Max 256GB ',
            'description' => 'Điện thoại iPhone 15 Pro Max 256GB ',
            'content' => 'Điện thoại iPhone 15 Pro Max 256GB ',
            'menu_id' => '12',
            'price' => '34990000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/iphone-15-pro-max-blue-1-1.jpg',
        ]);

        DB::table('products')->insert([
            'id' => '8',
            'name' => 'Điện thoại iPhone 13 128GB',
            'description' => 'Điện thoại iPhone 13 128GB',
            'content' => 'Điện thoại iPhone 13 128GB',
            'menu_id' => '12',
            'price' => '17790000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/iphone-13-xanh-glr-1.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '9',
            'name' => 'Điện thoại OPPO Reno11 F 5G Tím',
            'description' => 'Điện thoại OPPO Reno11 F 5G Tím',
            'content' => 'OPPO Reno11 F 5G là một chiếc điện thoại tầm trung mới được OPPO ra mắt trong thời gian gần đây. Máy sở hữu nhiều ưu điểm nổi bật như thiết kế trẻ trung, màn hình đẹp, hiệu năng mạnh mẽ nhờ chip Dimensity 7050 5G, hứa hẹn mang đến trải nghiệm tốt khi sử dụng.',
            'menu_id' => '13',
            'price' => '8990000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/oppo-reno-11f-tim-1.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '10',
            'name' => 'Laptop Dell Inspiron 15 3520 i5 1235U/16GB/512GB/120Hz/OfficeHS/KYHD/Win11 (25P231)',
            'description' => 'Laptop Dell Inspiron 15 3520 i5 1235U/16GB/512GB/120Hz/OfficeHS/KYHD/Win11 (25P231)',
            'content' => 'Laptop Dell Inspiron 15 3520 i5 1235U (25P231) hoàn toàn sở hữu mọi yếu tố mà một người dùng cá nhân cơ bản cần, hiệu năng ổn định từ con chip Intel i5, RAM 16 GB, màn hình 15.6 inch thoải mái cũng như sở hữu một mức giá lý tưởng tại Thế Giới Di Động.',
            'menu_id' => '23',
            'price' => '16990000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/vi-vn-dell-inspiron-15-3520-i5-25p231-slider-1.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '11',
            'name' => 'Laptop Dell Inspiron 15 3520 i3 1215U/8GB/256GB/120Hz/OfficeHS/Win11 (i3U082W11BLU) ',
            'description' => 'Laptop Dell Inspiron 15 3520 i3 1215U/8GB/256GB/120Hz/OfficeHS/Win11 (i3U082W11BLU) ',
            'content' => 'Laptop Dell Inspiron 15 3520 i3 1215U (i3U082W11BLU) nhắm trực tiếp đến đối tượng người dùng là sinh viên và nhân viên văn phòng với lối thiết kế thanh lịch, cấu hình có thể vận hành ổn định mọi tác vụ thường ngày, một chiếc laptop học tập - văn phòng mà bạn không nên bỏ qua.',
            'menu_id' => '23',
            'price' => '12990000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/dell-inspiron-15-3520-i3-i3u082w11blu638155265805066512.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '12',
            'name' => 'Vòng đeo tay thông minh Mi Band 8',
            'description' => 'Vòng đeo tay thông minh Mi Band 8',
            'content' => 'Thương hiệu “smartband quốc dân” vừa cho ra mắt thế hệ sản phẩm tiếp theo của mình mang tên Mi Band 8, với nhiều tính năng theo dõi sức khỏe, hỗ trợ luyện tập cùng vô vàn tiện ích hằng ngày, đáp ứng tốt mọi nhu cầu sử dụng cơ bản của người dùng.',
            'menu_id' => '5',
            'price' => '990000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/vi-vn-mi-band-8-sld-1.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '13',
            'name' => 'Đồng hồ thông minh Oppo Watch X 47mm',
            'description' => 'Đồng hồ thông minh Oppo Watch X 47mm',
            'content' => 'Đồng hồ thông minh Oppo Watch X 47mm là một sản phẩm đột phá, mang đến trải nghiệm hoàn toàn mới cho người dùng. Với thiết kế thời trang sang trọng, màn hình AMOLED lớn và nhiều tính năng thông minh, chiếc đồng hồ này hứa hẹn sẽ trở thành người bạn đồng hành lý tưởng cho cuộc sống hiện đại của bạn.',
            'menu_id' => '5',
            'price' => '7490000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/vi-vn-oppo-watch-x-sld-1.jpg',
        ]);
        ///
        DB::table('products')->insert([
            'id' => '14',
            'name' => 'Điện thoại realme Note 50 64GB',
            'description' => 'Điện thoại realme Note 50 64GB',
            'content' => 'Điện thoại realme Note 50 64GB',
            'menu_id' => '1',
            'price' => '2490000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/realme-note-50-xanh-1.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '15',
            'name' => 'Điện thoại Xiaomi Redmi 13C 4GB ',
            'description' => 'Điện thoại Xiaomi Redmi 13C 4GB ',
            'content' => 'Điện thoại Xiaomi Redmi 13C 4GB',
            'menu_id' => '1',
            'price' => '2790000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/xiaomi-redmi-13c-xanh-1-1.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '16',
            'name' => 'Điện thoại Xiaomi Redmi A3 (3GB/64GB)',
            'description' => 'Điện thoại Xiaomi Redmi A3 (3GB/64GB)',
            'content' => 'Điện thoại Xiaomi Redmi A3 (3GB/64GB)',
            'menu_id' => '1',
            'price' => '2490000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/xiaomi-redmi-a3-xanh-1-1.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '17',
            'name' => 'Điện thoại vivo Y17s (6GB/128GB) ',
            'description' => 'Điện thoại vivo Y17s (6GB/128GB) ',
            'content' => 'Điện thoại vivo Y17s (6GB/128GB)',
            'menu_id' => '1',
            'price' => '3990000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/vivo-y17s-xanh-den-1.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '18',
            'name' => 'Máy tính bảng iPad Air 6 M2 11 inch WiFi 128GB ',
            'description' => 'Máy tính bảng iPad Air 6 M2 11 inch WiFi 128GB ',
            'content' => 'Máy tính bảng iPad Air 6 M2 11 inch WiFi 128GB ',
            'menu_id' => '4',
            'price' => '3990000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/ipad-air-11-inch-m2-wifi-blue-1.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '19',
            'name' => 'Máy tính bảng OPPO Pad Neo WiFi',
            'description' => 'Máy tính bảng OPPO Pad Neo WiFi',
            'content' => 'Máy tính bảng OPPO Pad Neo WiFi',
            'menu_id' => '4',
            'price' => '3990000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/oppo-pad-neo-xam-1.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '20',
            'name' => 'Máy tính bảng HONOR Pad X9',
            'description' => 'Máy tính bảng HONOR Pad X9',
            'content' => 'Máy tính bảng HONOR Pad X9',
            'menu_id' => '4',
            'price' => '3990000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/honor-pad-x9-xam-1.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '21',
            'name' => 'Máy tính bảng Samsung Galaxy Tab S6 Lite (2024)',
            'description' => 'Máy tính bảng Samsung Galaxy Tab S6 Lite (2024)',
            'content' => 'Máy tính bảng Samsung Galaxy Tab S6 Lite (2024)',
            'menu_id' => '4',
            'price' => '3990000',
            'price_sale' => '200000',
            'active' => '1',
            'thumb' => '/template/images/samsung-galaxy-tab-s6-lite-2024-mint-1.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '22',
            'name' => 'Máy tính bảng iPad 10 WiFi 64GB  ',
            'description' => 'Máy tính bảng iPad 10 WiFi 64GB ',
            'content' => 'Máy tính bảng iPad 10 WiFi 64GB ',
            'menu_id' => '4',
            'price' => '4000000',
            'price_sale' => '50000',
            'active' => '1',
            'thumb' => '/template/images/ipad-gen-10-xanh-1.jpg',
        ]);
        ///
        DB::table('products')->insert([
            'id' => '23',
            'name' => 'Tai nghe Bluetooth True Wireless AVA+ Buds Life Air 3',
            'description' => 'Tai nghe Bluetooth True Wireless AVA+ Buds Life Air 3',
            'content' => 'Tai nghe Bluetooth True Wireless AVA+ Buds Life Air 3',
            'menu_id' => '3',
            'price' => '450000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/tai-nghe-bluetooth-true-wireless-ava-buds-life-air-3-1.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '24',
            'name' => 'Tai nghe Bluetooth TWS Marshall Motif II A.N.C. ',
            'description' => 'Tai nghe Bluetooth TWS Marshall Motif II A.N.C. ',
            'content' => 'Tai nghe Bluetooth TWS Marshall Motif II A.N.C. ',
            'menu_id' => '3',
            'price' => '4940000',
            'price_sale' => '50000',
            'active' => '1',
            'thumb' => '/template/images/tai-nghe-bluetooth-tws-marshall-motif-ii-a-n-c-den-1.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '25',
            'name' => 'Tai nghe Bluetooth True Wireless Baseus Bowie E11',
            'description' => 'Tai nghe Bluetooth True Wireless Baseus Bowie E11',
            'content' => 'Tai nghe Bluetooth True Wireless Baseus Bowie E11',
            'menu_id' => '3',
            'price' => '320000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/tai-nghe-bluetooth-true-wireless-baseus-bowie-e11-hong-1.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '26',
            'name' => 'Tai nghe Bluetooth True Wireless AVA+ Go P210',
            'description' => 'Tai nghe Bluetooth True Wireless AVA+ Go P210 ',
            'content' => 'Tai nghe Bluetooth True Wireless AVA+ Go P210 ',
            'menu_id' => '3',
            'price' => '160000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/tai-nghe-bluetooth-true-wireless-ava-go-p210-den-1-1.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '27',
            'name' => 'Tai nghe Bluetooth True Wireless Soundpeats GoFree 2 Open - Ear',
            'description' => 'Tai nghe Bluetooth True Wireless Soundpeats GoFree 2 Open - Ear',
            'content' => 'Tai nghe Bluetooth True Wireless Soundpeats GoFree 2 Open - Ear',
            'menu_id' => '3',
            'price' => '1190000',
            'price_sale' => '50000',
            'active' => '1',
            'thumb' => '/template/images/tai-nghe-bluetooth-true-wireless-soundpeats-gofree-2-open-ear-1.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '28',
            'name' => 'Camera IP 360 Độ 2MP TP-Link Tapo TC70',
            'description' => 'Camera IP 360 Độ 2MP TP-Link Tapo TC70',
            'content' => 'Camera IP 360 Độ 2MP TP-Link Tapo TC70',
            'menu_id' => '3',
            'price' => '430000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/camera-ip-360-do-1080p-tp-link-tapo-tc70-trang-2-org.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '29',
            'name' => 'Camera IP 360 Độ 2MP TIANDY TC-H322N',
            'description' => 'Camera IP 360 Độ 2MP TIANDY TC-H322N',
            'content' => 'Camera IP 360 Độ 2MP TIANDY TC-H322N',
            'menu_id' => '3',
            'price' => '430000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/camera-ip-360-do-2mp-tiandy-tc-h322n-1.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '30',
            'name' => 'Camera IP Ngoài Trời 2MP IMOU Bullet 2C F22P',
            'description' => 'Camera IP Ngoài Trời 2MP IMOU Bullet 2C F22P',
            'content' => 'Camera IP Ngoài Trời 2MP IMOU Bullet 2C F22P',
            'menu_id' => '3',
            'price' => '430000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/camera-ip-ngoai-troi-1080p-imou-bullet-2c-f22p-1-1.jpg',
        ]);




    }
}
