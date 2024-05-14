@include('crud_admin.admin_header')
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Reset -->
    <link rel="stylesheet" href="{{url('CSS/css/reset.css')}}">

    <!-- Style -->
    <link rel="stylesheet" href="CSS/css/style.css">
    <title>User Profile</title>
    <style>

    .container {
        max-width: 800px;
        margin: 20px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .profile {
        text-align: center;
        margin-bottom: 20px;
    }

    .profile img {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        object-fit: cover;
        border: 4px solid #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .profile h2 {
        margin-top: 10px;
    }

    .info {
        padding: 20px 0;
    }

    .info h3 {
        margin-bottom: 10px;
        color: #333;
    }

    .info p {
        margin: 10px 0;
        color: #666;
    }
    .container button {
        background: #ffb900;
        color: white;
        border: none;
        margin-left: 600px;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="profile">
            <img src="CSS/img/{{$user->avatar}}" alt="Avatar">
            <h2>{{ $user->name }}</h2>

        </div>
        <div class="info">
            <h3>ID: {{$user->id}}</h3>
            <h3>Contact</h3>
            <p>Email: {{$user->email}}</p>
            <p>Phone: {{$user->phone}}</p>
        </div>
        <button class = "btn edit-user">Edit</button>
    </div>
</body>

</html>
@include('crud_admin.admin_footer')