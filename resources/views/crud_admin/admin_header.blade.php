<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Reset css -->
    <link rel="stylesheet" href="{{ url('CSS/css/reset.css')}}">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sen:wght@400..800&display=swap"
        rel="stylesheet" />

    <!-- Style css -->
    <link rel="stylesheet" href="CSS/css/style.css" />
    <title>Dashboard Admin</title>
</head>
<style>
    .header .bodyheader {
        justify-content: space-between;
    }

    .bodyheader h2 {
        color: #5f5b53;

    }
</style>

<body>
    <!-- HEADER -->
    <header class="header fixed">
        <div class="main-content">
            <div class="bodyheader">
                <!-- logo -->
                <img src="CSS/img/logo.jpg" alt="hui_ecommerce" class="logo_hui" />
                <!-- navigation -->
                <nav class="nav">
                    <ul>
                        <li class="active"> <a href="{{route('admin_home')}}">
                                <h2>Admin</h2>
                            </a></li>
                       
                        <li><a href="{{route('logout')}}">Logout</a></li>
                    </ul>
                </nav>

            </div>
        </div>
    </header>



</body>

</html>