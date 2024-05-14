
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Reset -->
    <link rel="stylesheet" href="{{url('CSS/css/reset.css')}}">

    <!-- Style -->
    <link rel="stylesheet" href="CSS/css/style.css">
    <title>Page Admin</title>

</head>
<style>
  
    .admin_feature {
        justify-content: center;
        
       
    }
    /* Dashboard left */
    .dashboard_left {
        background-color: #f2f2f2;
        max-width: 300px;
        display: inline-block;
        
    }
    .dashboard_left .dashboard_applications .title{
        font-size: 2.0rem;
        
        padding: 20px;
    }
    .dashboard_left .dashboard_applications ul {
        margin-left: 50px;
    }
    .dashboard_applications ul li {
        padding-top: 10px;
        padding-bottom: 10px;
    }
    .dashboard_applications ul a li:hover{
        background-color: #5f5b5355;
        color: rgba(0, 0, 0, 0.464);
    }
    .dashboard_applications ul a li{
        color: black;
    }
    

    footer {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 1rem;
       
        bottom: 0;
        width: 100%;
    }
</style>

<body>
    <div class="admin_feature">
        <div class="dashboard_left">
            <div class='dashboard'>
                <div class="dashboard_applications">
                    <div class="title">Applications</div>
                    <ul>
                        <a href="{{route('admin_list_product')}}"><li>Product</li></a>
                        <a href="!#"><li>Category</li></a>
                        <a href="{{route('admin_list_user')}}"><li>User</li></a>
                        <a href="!#"><li>Brand</li></a>
                        <a href="!#"><li>Order</li></a>
                    </ul>
                </div>
            </div>
        </div>
        
    </div>
</body>

</html>

