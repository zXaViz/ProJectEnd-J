@include('crud_admin.admin_header')

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
    /* Describe ecommerce */
    .describe-ecommerce {
        margin-bottom: 80px;
    }

    .describe-ecommerce .main-content {
        display: flex;
        border-radius: 30px;
        background-color: white;
    }

    .describe-ecommerce .describe-left img {
        width: 350px;
        margin-right: 70px;
    }

    .describe-ecommerce .describe-right .describe {
        margin-top: 20px;
        line-height: 1.5;
    } 
    .admin_feature .dashboard_right {
        background-color: white;
    }
  
</style>

<body>
    <div class="admin_feature">    
        <div class="dashboard_left">
            @include('crud_admin.admin_dashboard')
        </div>
        <div class="dashboard_right">
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
        </div>
    </div>
</body>
</html>
@include('crud_admin.admin_footer')