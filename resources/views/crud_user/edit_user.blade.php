@include('crud_admin.admin_header')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa thông tin người dùng</title>
    <style>
    body {
        font-size: 1.6rem;
        font-family: "Poppins", sans-serif;
        background-color: white;

    }

    .container {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 450px;
        width: 100%;

        margin: auto;
        margin-bottom: 50px;
        margin-top: 50px;
        ;
    }

    .container .edit_user {
        text-align: center;
        padding: 20px
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .form-group input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .form-group input[type="submit"] {
        background-color: #ffb900;
        color: #fff;
        border: none;
        cursor: pointer;
    }

    .form-group input[type="submit"]:hover {
        background-color: #ffbb0067;
    }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="edit_user">EDIT USER</h2>
        <form action="{{ route('udpate_edit_user') }}" method="post">
            @csrf
            <input name="id" type="hidden" value="{{$user->id}}">
            <div class="form-group">
                <label for="fullname">Username:</label>
                <input type="text" id="name" name="name" value="{{ $user->name}}" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="{{ $user->email }}" required>
            </div>
            <div class="form-group">
                <label for="password">New Password:</label>
                <input type="password" id="password" name="password" >
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm new password:</label>
                <input type="password" id="confirm_password" name="confirm_password" >
            </div>
            <div class="form-group">
                <input type="submit" value="Update change">
            </div>
        </form>
    </div>
</body>

</html>
@include('crud_admin.admin_footer')
