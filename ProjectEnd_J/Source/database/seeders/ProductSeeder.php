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
        //
        DB::table('products')->insert([
            'id' => '31',
            'name' => 'Tai nghe Bluetooth AirPods Pro Gen 2 MagSafe Charge (USB-C) Apple MTJV3',
            'description' => 'Tai nghe Bluetooth AirPods Pro Gen 2 MagSafe Charge (USB-C) Apple MTJV3',
            'content' => 'Tai nghe Bluetooth AirPods Pro Gen 2 MagSafe Charge (USB-C) Apple MTJV3',
            'menu_id' => '33',
            'price' => '6200000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/tai-nghe-bluetooth-airpods-pro-2nd-gen-usb-c-charge-apple-1.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '32',
            'name' => 'Tai nghe Bluetooth AirPods 3 Lightning Charge Apple MPNY3',
            'description' => 'Tai nghe Bluetooth AirPods 3 Lightning Charge Apple MPNY3',
            'content' => 'Tai nghe Bluetooth AirPods 3 Lightning Charge Apple MPNY3',
            'menu_id' => '33',
            'price' => '4190000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/tai-nghe-bluetooth-airpods-3-lightning-charge-apple-mpny3-trang-1.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '33',
            'name' => 'Tai nghe Bluetooth AirPods Pro (2nd Gen) MagSafe Charge (Lightning) Apple MQD83',
            'description' => 'Tai nghe Bluetooth AirPods Pro (2nd Gen) MagSafe Charge (Lightning) Apple MQD83',
            'content' => 'Tai nghe Bluetooth AirPods Pro (2nd Gen) MagSafe Charge (Lightning) Apple MQD83',
            'menu_id' => '33',
            'price' => '5390000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/airpods-pro-2nd-generation-0.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '34',
            'name' => 'Tai nghe Bluetooth AirPods 3 Lightning Charge Apple MPNY3',
            'description' => 'Tai nghe Bluetooth AirPods 3 Lightning Charge Apple MPNY3',
            'content' => 'Tai nghe Bluetooth AirPods 3 Lightning Charge Apple MPNY3',
            'menu_id' => '33',
            'price' => '4190000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/tai-nghe-bluetooth-airpods-3-lightning-charge-apple-mpny3-trang-1 (1).jpg',
        ]);
        //
        DB::table('products')->insert([
            'id' => '35',
            'name' => 'Đồng hồ thông minh Apple Watch SE 2023 GPS 40mm',
            'description' => 'Đồng hồ thông minh Apple Watch SE 2023 GPS 40mm',
            'content' => 'Đồng hồ thông minh Apple Watch SE 2023 GPS 40mm',
            'menu_id' => '5',
            'price' => '5990000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/apple-watch-se-2023-40mm-vien-nhom-day-silicone-xanh-duong-nhat-1-1.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '36',
            'name' => 'Đồng hồ thông minh Apple Watch Series 9 GPS 41mm',
            'description' => 'Đồng hồ thông minh Apple Watch Series 9 GPS 41mm',
            'content' => 'Đồng hồ thông minh Apple Watch Series 9 GPS 41mm',
            'menu_id' => '5',
            'price' => '9390000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/apple-watch-s9-41mm-vien-nhom-day-silicone-1.jpg',
        ]);

        DB::table('products')->insert([
            'id' => '37',
            'name' => 'Đồng hồ thông minh Apple Watch Ultra 2 GPS + Cellular 49mm viền Titanium dây Ocean',
            'description' => 'Đồng hồ thông minh Apple Watch Ultra 2 GPS + Cellular 49mm viền Titanium dây Ocean',
            'content' => 'Đồng hồ thông minh Apple Watch Ultra 2 GPS + Cellular 49mm viền Titanium dây Ocean',
            'menu_id' => '5',
            'price' => '20990000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/apple-watch-ultra-lte-49mm-vien-titanium-day-ocean-trang-1-2.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '38',
            'name' => 'Đồng hồ thông minh Apple Watch Series 9 GPS 41mm viền nhôm dây vải',
            'description' => 'Đồng hồ thông minh Apple Watch Series 9 GPS 41mm viền nhôm dây vải',
            'content' => 'Đồng hồ thông minh Apple Watch Series 9 GPS 41mm viền nhôm dây vải',
            'menu_id' => '5',
            'price' => '9790000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/apple-watch-s9-41mm-vien-nhom-day-vai-xanh-duong-nhat-1.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '39',
            'name' => 'Đồng hồ thông minh Apple Watch Series 9 GPS 41mm viền nhôm dây vải',
            'description' => 'Đồng hồ thông minh Apple Watch Series 9 GPS 41mm viền nhôm dây vải',
            'content' => 'Đồng hồ thông minh Apple Watch Series 9 GPS 41mm viền nhôm dây vải',
            'menu_id' => '5',
            'price' => '9790000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/apple-watch-s9-41mm-vien-nhom-day-vai-xanh-duong-nhat-1.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '40',
            'name' => 'Đồng hồ thông minh Apple Watch Series 9 GPS + Cellular 41mm viền nhôm dây thể thao',
            'description' => 'Đồng hồ thông minh Apple Watch Series 9 GPS + Cellular 41mm viền nhôm dây thể thao',
            'content' => 'Đồng hồ thông minh Apple Watch Series 9 GPS + Cellular 41mm viền nhôm dây thể thao',
            'menu_id' => '5',
            'price' => '9790000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/apple-watch-s9-lte-41mm-vien-nhom-day-silicone-xanh-duong-nhat-1.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '41',
            'name' => 'Đồng hồ thông minh Apple Watch SE 2023 GPS + Cellular 40mm viền nhôm dây thể thao',
            'description' => 'Đồng hồ thông minh Apple Watch SE 2023 GPS + Cellular 40mm viền nhôm dây thể thao',
            'content' => 'Đồng hồ thông minh Apple Watch SE 2023 GPS + Cellular 40mm viền nhôm dây thể thao',
            'menu_id' => '5',
            'price' => '7390000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/apple-watch-se-lte-2023-40mm-vien-nhom-day-silicone-trang-starlight-1.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '42',
            'name' => 'Đồng hồ thông minh Apple Watch Series 8 GPS 41mm viền nhôm dây thể thao',
            'description' => 'Đồng hồ thông minh Apple Watch Series 8 GPS 41mm viền nhôm dây thể thao',
            'content' => 'Đồng hồ thông minh Apple Watch Series 8 GPS 41mm viền nhôm dây thể thao',
            'menu_id' => '5',
            'price' => '8990000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/apple-watch-s8-41mm-trang-kem-1.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '43',
            'name' => 'Đồng hồ thông minh Apple Watch SE 2023 GPS + Cellular 40mm viền nhôm dây vải ',
            'description' => 'Đồng hồ thông minh Apple Watch SE 2023 GPS + Cellular 40mm viền nhôm dây vải ',
            'content' => 'Đồng hồ thông minh Apple Watch SE 2023 GPS + Cellular 40mm viền nhôm dây vải ',
            'menu_id' => '5',
            'price' => '7490000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/apple-watch-se-lte-2023-40mm-vien-nhom-day-vai-trang-starlight-1.jpg',
        ]);
        //
        DB::table('products')->insert([
            'id' => '44',
            'name' => 'Điện thoại Masstel FAMI 60 ',
            'description' => 'Masstel Fami 60 là chiếc điện thoại phổ thông dành tặng riêng cho người cao tuổi với thiết kế gọn gàng, màn hình rõ nét và cụm loa ngoài cực lớn cùng pin “siêu trâu”, hỗ trợ công nghệ đàm thoại LTE 4G, hứa hẹn sẽ đáp ứng hoàn hảo nhu cầu giải trí cơ bản, liên lạc của bạn.',
            'content' => 'Masstel Fami 60 là chiếc điện thoại phổ thông dành tặng riêng cho người cao tuổi với thiết kế gọn gàng, màn hình rõ nét và cụm loa ngoài cực lớn cùng pin “siêu trâu”, hỗ trợ công nghệ đàm thoại LTE 4G, hứa hẹn sẽ đáp ứng hoàn hảo nhu cầu giải trí cơ bản, liên lạc của bạn.',
            'menu_id' => '1',
            'price' => '700000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/vi-vn-masstel-fami-60-tinhnang-slider.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '45',
            'name' => 'Điện thoại Masstel Lux 10',
            'description' => 'Masstel Lux 10 - mẫu điện thoại vừa được ra mắt tại thị trường Việt Nam vào tháng 12/2022, máy được nhà sản xuất định hình là một chiếc điện thoại phổ thông với chức năng đáp ứng các tác vụ nghe gọi là chủ yếu. Điện thoại nổi bật với viên pin lớn và hỗ trợ mạng di động 4G VoLTE tiên tiến.',
            'content' => 'Masstel Lux 10 - mẫu điện thoại vừa được ra mắt tại thị trường Việt Nam vào tháng 12/2022, máy được nhà sản xuất định hình là một chiếc điện thoại phổ thông với chức năng đáp ứng các tác vụ nghe gọi là chủ yếu. Điện thoại nổi bật với viên pin lớn và hỗ trợ mạng di động 4G VoLTE tiên tiến.',
            'menu_id' => '1',
            'price' => '700000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/masstel-lux-20-tong-quan-1020x569.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '46',
            'name' => 'Điện thoại Masstel IZI T6 4G ',
            'description' => 'Trong thời đại smartphone ngày càng trở nên phổ biến, Masstel IZI T6 4G như làn gió mới cho những ai mong muốn trở về với sự đơn giản, tiện ích trong sử dụng hằng ngày. Điện thoại là sự lựa chọn lý tưởng cho nhóm khách hàng có nhu cầu cơ bản như nghe gọi và nhắn tin, đặc biệt phù hợp với người lớn tuổi.',
            'content' => 'Trong thời đại smartphone ngày càng trở nên phổ biến, Masstel IZI T6 4G như làn gió mới cho những ai mong muốn trở về với sự đơn giản, tiện ích trong sử dụng hằng ngày. Điện thoại là sự lựa chọn lý tưởng cho nhóm khách hàng có nhu cầu cơ bản như nghe gọi và nhắn tin, đặc biệt phù hợp với người lớn tuổi.',
            'menu_id' => '1',
            'price' => '700000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/masstel-izi-t6-tong-quan-2048x1144.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '47',
            'name' => 'Điện thoại Masstel IZI 10 ',
            'description' => 'Masstel IZI 10 4G là 1 phiên bản "cục gạch" khác của nhà Masstel có tích hợp 4G mang lại trải nghiệm nghe gọi cực tốt, cùng thiết kế thân thiện dễ dùng, có hỗ trợ khe cắm thẻ nhớ và dung lượng pin tốt, rất đáng lựa chọn.',
            'content' => 'Masstel IZI 10 4G là 1 phiên bản "cục gạch" khác của nhà Masstel có tích hợp 4G mang lại trải nghiệm nghe gọi cực tốt, cùng thiết kế thân thiện dễ dùng, có hỗ trợ khe cắm thẻ nhớ và dung lượng pin tốt, rất đáng lựa chọn.',
            'menu_id' => '1',
            'price' => '390000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/Masstel-IZI-10-4G-0601-1020x570.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '48',
            'name' => 'Điện thoại Nokia 8210 4G',
            'description' => 'Nokia 8210 4G có lẽ là một lựa chọn phù hợp với những ai cần cho mình một chiếc điện thoại phổ thông phục vụ cho nhu cầu nghe gọi. Máy có giá thành rẻ và vừa có độ bền cao, giúp cho người dùng có thể tiết kiệm được kha khá số tiền bỏ ra ban đầu cũng như không cần quá lo lắng đến vấn đề hỏng hóc trong lúc sử dụng.',
            'content' => 'Nokia 8210 4G có lẽ là một lựa chọn phù hợp với những ai cần cho mình một chiếc điện thoại phổ thông phục vụ cho nhu cầu nghe gọi. Máy có giá thành rẻ và vừa có độ bền cao, giúp cho người dùng có thể tiết kiệm được kha khá số tiền bỏ ra ban đầu cũng như không cần quá lo lắng đến vấn đề hỏng hóc trong lúc sử dụng.',
            'menu_id' => '1',
            'price' => '1590000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/nokia-8210-4g-tong-quan-1020x570.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '49',
            'name' => 'Điện thoại Nokia 215 4G',
            'description' => 'Nokia 215 chiếc điện thoại phổ thông ngoài các chức năng cơ bản thì máy đã được nâng cấp với sự hỗ trợ kết nối mạng 4G mang đến nhiều trải nghiệm hơn cho người dùng.
Thiết kế đơn giản, gọn nhẹ
Nokia 215 4G sử dụng chất liệu nhựa cho kiểu dáng bền bỉ, các nút cảm ứng mềm lớn, cạnh dễ cầm và mặt lưng cong được thiết kế để vừa vặn hoàn toàn trong tay bạn, cho bạn có được sự thoải mái, tiện lợi nhất.',
            'content' => 'Điện thoại Nokia 215 4G',
            'menu_id' => '1',
            'price' => '990000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/nokia-8210-4g-tong-quan-1020x570.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '50',
            'name' => 'Điện thoại Nokia 110 4G Pro',
            'description' => 'Nokia 110 4G Pro là một chiếc điện thoại phổ thông nổi bật, được thiết kế tinh tế và sang trọng. Điện thoại cho khả năng bền bỉ trong thời gian dài khiến bạn cảm thấy yên tâm khi sử dụng. Với việc hỗ trợ công nghệ 4G VoLTE, bạn có thể thực hiện cuộc gọi một cách nhanh chóng và ổn định hơn.',
            'content' => 'Nokia 110 4G Pro là một chiếc điện thoại phổ thông nổi bật, được thiết kế tinh tế và sang trọng. Điện thoại cho khả năng bền bỉ trong thời gian dài khiến bạn cảm thấy yên tâm khi sử dụng. Với việc hỗ trợ công nghệ 4G VoLTE, bạn có thể thực hiện cuộc gọi một cách nhanh chóng và ổn định hơn.',
            'menu_id' => '1',
            'price' => '720000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/nokia-110-4g-pro-slider-1-2-2048x1144.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '51',
            'name' => 'Điện thoại Mobell F309 4G',
            'description' => 'Chiếc điện thoại Mobell F309 là sự lựa chọn phù hợp cho khách hàng đang tìm kiếm một thiết bị di động nhỏ gọn để liên lạc, hỗ trợ mạng di động 4G VoLTE và có thể sử dụng hai SIM nano giúp cho nhu cầu liên lạc bằng việc nghe gọi/nhắn tin được đáp ứng tốt.',
            'content' => 'Điện thoại Mobell F309 4G',
            'menu_id' => '1',
            'price' => '700000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/vi-vn-mobell-f309-slider.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '52',
            'name' => 'Điện thoại Masstel Fami 60S 4G',
            'description' => 'Điện thoại Masstel Fami 60S 4G',
            'content' => 'Điện thoại Masstel Fami 60S 4G',
            'menu_id' => '1',
            'price' => '720000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/masstel-fami-60s-tongquan-1020x570.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '53',
            'name' => 'Điện thoại Mobell Rock 4',
            'description' => 'Điện thoại Mobell Rock 4',
            'content' => 'Điện thoại Mobell Rock 4G',
            'menu_id' => '1',
            'price' => '670000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/mobell-rock-4-1020x570.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '54',
            'name' => 'Điện thoại Itel it9010',
            'description' => 'Điện thoại Itel it9010',
            'content' => 'Điện thoại Itel it9010',
            'menu_id' => '1',
            'price' => '420000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/Itelit9010-1020x570.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '55',
            'name' => 'Laptop Asus Vivobook 15 OLED ',
            'description' => 'Laptop Asus Vivobook 15 OLED A1505ZA i5 12500H (L1337W) có không gian hiển thị rộng rãi, sắc nét với màn hình 15.6 inch OLED cùng nhiều hiệu năng mạnh mẽ khác. Đây chắc hẳn là chiếc laptop đồ họa - kỹ thuật phù hợp với những bạn đang có đòi hỏi về đồ họa hay các công việc sáng tạo.',
            'content' => 'Laptop Asus Vivobook 15 OLED',
            'menu_id' => '2',
            'price' => '16490000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/vi-vn-asus-vivobook-15-oled-a1505za-i5-l1337w-slider-1.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '56',
            'name' => 'Laptop Asus Vivobook Go 15 ',
            'description' => 'Laptop Asus Vivobook Go 15 E1504FA R5 7520U (NJ776W) mang phong cách thiết kế sang trọng, hiệu năng mạnh mẽ cùng tính đa năng sử dụng, chắc chắn sẽ giúp bạn đáp ứng mọi tác vụ công việc và học tập hàng ngày một cách hiệu quả và chuyên nghiệp nhất.',
            'content' => 'Laptop Asus Vivobook Go 15',
            'menu_id' => '2',
            'price' => '12490000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/vi-vn-asus-vivobook-go-15-e1504fa-r5-nj776w-slider-1.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '57',
            'name' => 'Laptop Asus TUF Gaming A15 ',
            'description' => 'Một mẫu laptop chiến game đến từ thương hiệu Asus vừa được lên kệ tại Thế Giới Di Động, sở hữu những thông số cấu hình vượt trội với AMD Ryzen 5 dòng HS mạnh mẽ, card rời RTX 2050 và có một mức giá cân đối. Laptop Asus TUF Gaming A15 FA506NF R5 7535HS (HN012W) chắc chắn sẽ là công cụ tuyệt vời để thoả mãn mọi nhu cầu giải trí của anh em.',
            'content' => 'Laptop Asus TUF Gaming A15',
            'menu_id' => '2',
            'price' => '17490000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/vi-vn-asus-tuf-gaming-a15-fa506nf-r5-hn012w-slider-1.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '58',
            'name' => 'Laptop Asus Zenbook 14 OLED',
            'description' => 'Mở đầu cho kỷ nguyên laptop mới, hiện đại, thông minh, laptop Asus Zenbook 14 OLED UX3405MA Ultra 5 (PP151W) sở hữu con chip Intel Meteor Lake hoàn toàn mới, được tích hợp hàng loạt những tính năng AI hữu ích, màn hình chuẩn sắc nét. Mẫu sản phẩm này chắc chắn sẽ nâng tầm đáng kể cho phong cách làm việc của bạn.',
            'content' => 'Laptop Asus Zenbook 14 OLED',
            'menu_id' => '2',
            'price' => '27990000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/vi-vn-asus-zenbook-14-oled-ux3405ma-ultra-5-pp151w-slider-2.jpg',
        ]);
        DB::table('products')->insert([
            'id' => '59',
            'name' => 'Laptop Asus Zenbook 14 Flip OLED',
            'description' => 'Laptop Asus Zenbook 14 Flip OLED UP3404VA i5 1340P (KN038W) - một trong những sản phẩm mới nhất của Asus đã có mặt tại Thế Giới Di Động, được trang bị bộ vi xử lý Intel thế hệ 13 tân tiến và màn hình OLED 14 inch cảm ứng đa điểm với thiết kế 2 trong 1, cho phép bạn sử dụng máy như một chiếc laptop hoặc tablet',
            'content' => 'Laptop Asus Zenbook 14 Flip OLED',
            'menu_id' => '2',
            'price' => '24990000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/vi-vn-asus-zenbook-14-flip-oled-up3404va-i5-kn038w--(2).jpg',
        ]);
        DB::table('products')->insert([
            'id' => '60',
            'name' => 'Laptop Asus Gaming ROG Zephyrus G16',
            'description' => 'Mẫu máy xách tay tương lai cho mọi nhu cầu của bạn, laptop Asus Gaming ROG Zephyrus G16 GU605MV Ultra 9 185H (QR135W) với ngoại hình chuẩn cao cấp như những mẫu ultrabook, cấu hình khủng từ con chip Intel Core Ultra 9, card rời RTX 40 series,... đáp ứng các tựa game khủng, đồ hoạ hay thiết kế web đều trong tầm tay.',
            'content' => 'Laptop Asus Gaming ROG Zephyrus G16',
            'menu_id' => '2',
            'price' => '63990000',
            'price_sale' => '0',
            'active' => '1',
            'thumb' => '/template/images/vi-vn-asus-gaming-rog-zephyrus-g16-gu605mv-ultra-9-qr135w-slider-1.jpg',
        ]);



    }
}
