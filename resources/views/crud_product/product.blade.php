@include('dashboard')

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    {{-- Reset --}}
    <link rel="stylesheet" href="{{ url('CSS/css/reset.css') }}" />
    {{-- Style --}}
    <link rel="stylesheet" href="CSS/css/style.css" />
    <title>Product</title>
</head>
<style>
.manager-category {
    margin: 50px;
}

.category .list-category {
    display: flex;
}

.category a {
    margin: auto;
    color: black;
}

.category .item-category {
    width: 100%;
    height: 17 0px;
    margin: auto;
    padding: 20px;
    text-align: center;
    border: solid 1px rgba(0, 0, 0, 0.103);
    border-radius: 5px;
}

.category .item-category:hover {
    box-shadow: 0px 18px 36px 10px #0000000d;
    border: none;
}

.category .list-category img {
    width: 84px;
    height: 88px;
}

.item-category .title-category {
    margin-top: 10px;

}

/* Click section */
.click-section .group-section {
    display: flex;
}

.brand-sale .group-brand {
    display: flex;
}

.brand-sale .item-brand img {
    width: 33%;
}

/* Search */
.search {
    margin-top: 50px;
}

.search-container {
    display: flex;
    width: 900px;
    height: 50px;
    margin: auto;
}

input[type="text"] {
    padding: 10px;
    flex: 1;
    border: 3px solid #ffb900;
    border-radius: 5px 0 0 5px;
    outline: none;
}

button[type="submit"] {
    padding: 10px 20px;
    background-color: #ffb900;
    color: #fff;
    border: none;
    border-radius: 0 5px 5px 0;
    cursor: pointer;
    outline: none;
}

button[type="submit"]:hover {
    background-color: #ffbb00ea;
}

/* Describe ecommerce */
.describe-ecommerce {
    margin-bottom: 80px;
}

.describe-ecommerce .main-content {
    display: flex;
    border-radius: 30px;
    background-color: #fffcf4;
}

.describe-ecommerce .describe-left img {
    width: 350px;
    margin-right: 70px;
}

.describe-ecommerce .describe-right .describe {
    margin-top: 20px;
    line-height: 1.5;
}
</style>

<body>
    <!-- Search -->
    <div class="search">
        <div class="main-content">
            <div class="search-container">
                <input type="text" placeholder="Search..." />
                <button type="submit">
                    <img src="CSS/icon/search.png" width="30px" alt="" />
                </button>
            </div>
        </div>
    </div>
    <!-- Category 1 -->

    <div class='manager-category'>
        <div class="category">
            <div class="main-content">
                <div class="list-category">
                    <a href="{{ route ('style_men')}}">
                        <div class="item-category">
                            <img src="CSS/icon/tuxedo.png" alt="dress" />
                            <div class="title-category">Style Men</div>
                        </div>
                    </a>
                    <a href="!#">
                        <div class="item-category">
                            <img src="CSS/icon/mobile-phone.png" alt="Shirt" />
                            <div class="title-category">Phone</div>
                        </div>
                    </a>
                    <a href="!#">
                        <div class="item-category">
                            <img src="CSS/icon/gadgets.png" alt="Trouser" />
                            <div class="title-category">Electonic </div>
                        </div>
                    </a>
                    <a href="!#">
                        <div class="item-category">
                            <img src="CSS/icon/laptop.png" alt="jewelry" />
                            <div class="title-category">Computer</div>
                        </div> <a href='!#'></a>
                    </a>
                    <a href="!#">
                        <div class="item-category">
                            <img src="CSS/icon/smartwatch.png" alt="sneaker" />
                            <div class="title-category">Watch</div>
                        </div>
                    </a>
                    <a href="!#">
                        <div class="item-category">
                            <img src="CSS/icon/flip-flops.png" alt="high-heels" />
                            <div class="title-category">Sandal</div>
                        </div>
                    </a>
                    <a href="!#">
                        <div class="item-category">
                            <img src="CSS/icon/sports.png" alt="make-up" />
                            <div class="title-category">Sport</div>
                        </div>
                    </a>
                    <a href="!#">
                        <div class="item-category">
                            <img src="CSS/icon/travel.png" alt="hand-bag" />
                            <div class="title-category">Travel</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- Categoty 2 -->
        <div class="category">
            <div class="main-content">
                <div class="list-category">
                    <a href='!#'>
                        <div class="item-category">
                            <img src="CSS/icon/dress.png" alt="dress" />
                            <div class="title-category">Dress</div>
                        </div>
                    </a>
                    <a href='!#'>
                        <div class="item-category">
                            <img src="CSS/icon/crop-top.png" alt="Shirt" />
                            <div class="title-category">Shirt</div>
                        </div>
                    </a>
                    <a href='!#'>
                        <div class="item-category">
                            <img src="CSS/icon/woman.png" alt="Trouser" />
                            <div class="title-category">Trouser</div>
                        </div>
                    </a>
                    <a href='!#'>
                        <div class="item-category">
                            <img src="CSS/icon/necklace.png" alt="jewelry" />
                            <div class="title-category">Jewelry</div>
                        </div>
                    </a>
                    <a href='!#'>
                        <div class="item-category">
                            <img src="CSS/icon/sneakers.png" alt="sneaker" />
                            <div class="title-category">Sneaker</div>
                        </div>
                    </a>
                    <a href='!#'>
                        <div class="item-category">
                            <img src="CSS/icon/high-heels.png" alt="high-heels" />
                            <div class="title-category">High heel</div>
                        </div>
                    </a>
                    <a href='!#'>
                        <div class="item-category">
                            <img src="CSS/icon/make-up.png" alt="make-up" />
                            <div class="title-category">Make up</div>
                        </div>
                    </a>
                    <a href='!#'>
                        <div class="item-category">
                            <img src="CSS/icon/hand-bag.png" alt="hand-bag" />
                            <div class="title-category">Hand bag</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Group describe product -->
    <div class="describe-ecommerce">
        <div class="main-content">
            <div class="describe-left">
                <img src="CSS/icon/online-shop.png" alt="shopping" />
            </div>
            <div class="describe-right">
                <h1>Hui Ecommerce</h1>
                <p class="describe">
                    If you are looking for a website to buy and sell online,
                    Shopee.vn is a great choice for you. Shopee is an
                    e-commerce site that allows buyers and sellers to
                    interact and easily exchange information about the
                    shop's products and promotions. Therefore, buying and
                    selling on Shopee becomes faster and simpler. You can
                    chat directly with the seller to ask directly about the
                    item you want to buy. If you want to buy genuine,
                    reputable products, Shopee Mall is the ideal choice for
                    you. So that you can easily learn and use products,
                    Shopee Blog - Shopee's official information blog - will
                    help you find knowledge about fashion trends, technology
                    reviews, and tips. beauty, consumer news and
                    surprisingly good deals.
                </p>
            </div>
        </div>
    </div>
</body>

</html>
@include('footer')
