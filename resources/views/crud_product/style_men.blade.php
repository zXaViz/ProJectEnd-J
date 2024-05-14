@include('dashboard')
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Style men</title>
        <style>
            .image-banner {
                margin-top: 50px;
            }
            .container {
                display: flex;
                justify-content: space-between;
                align-items: flex-start;
            }
            .group-product {
                margin: 50px 0;
            }
            /* Sidebar */
            .sidebar {
                width: 25%;
                background-color: #f2f2f2;
                padding: 20px;
                box-sizing: border-box;
                margin-right: 30px;
            }

            .container ul li a {
                color: black;
            }
            .container ul li {
                margin-bottom: 20px;
            }
            .group-product .sidebar h2 {
                font-size: 25px;
                font-weight: bold;
                margin-bottom: 10px;
            }
            /* Product */
            .list-product .products {
                justify-content: space-between;
            }
            .list-product .item-product a {
                color: black;
            }
            .list-product {
                width: 75%;
            }
            .list-product .products {
                display: flex;
                flex-wrap: wrap;
                gap: 10px;
            }
            .list-product .item-product {
                width: 273px;
            }
            .list-product .item-product img {
                width: 272px;
                height: 273px;
            }
            .list-product .item-product .describe p {
                overflow: hidden;
                white-space: nowrap;
                text-overflow: ellipsis;
            }
            .list-product .item-product .describe {
                margin-top: 10px;
                font-size: 20px;
                height: 25px;
            }
            .list-product .item-product .price {
                color: red;
                font-size: 30px;
                margin-top: 5px;
            }
            .list-product .item-product .sell-number{
                margin: 15px 0 ;
            }
            .item-product .sell-number strong {
                font-weight: bold;
            }
        </style>
    </head>

    <body>
        <div class="image-banner">
            <div class="main-content">
                <img
                    src="CSS/img/image-banner.png"
                    width="1170px"
                    alt="banner"
                />
            </div>
        </div>
        <div class="group-product">
            <div class="main-content">
                <div class="container">
                    <div class="sidebar">
                        <h2>Search department</h2>
                        <ul>
                            <li><a href="#">Shirt</a></li>
                            <li><a href="#">Trouser</a></li>
                            <li><a href="#">Sneaker</a></li>
                            <li><a href="#">Sandal</a></li>
                            <li><a href="#">Jewelry</a></li>
                        </ul>
                    </div>
                    <div class="list-product">
                        <div class="products">
                            <div class="item-product">
                                <a href="!#">
                                    <img
                                        src="CSS/product/style_men/product.jpg"
                                        alt="pstyle men"
                                    />
                                    <div class="describe">
                                        <p>
                                            Áo chống nắng Nam Nữ 2 lớp AMJKO, áo
                                            khoác chống nắng ngăn tia UV thông
                                            hơi thoáng khí thời trang
                                        </p>
                                    </div>
                                    <p class="price">10$</p>
                                    <div class="sell-number">
                                        Sell number: <strong>18k</strong>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
@include('footer')
