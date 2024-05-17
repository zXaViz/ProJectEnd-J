<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <style>
        .logo_register {
           width: 300px;
           margin-right: 1200px;
           object-fit: cover;
        }

        .group_register {
            display: flex;
            margin: 0;
            padding: 0;
            justify-content: center;
            align-items: center;
            height: 80vh;
        }

        body {
            font-size: 1.6rem;
            font-family: "Poppins", sans-serif;
            

        }

        .container {
            margin-top: 50px;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
            
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
            background-color: #dc3545;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .form-group input[type="submit"]:hover {
            background-color: #dc35466c;
        }

        .container h2 {
            margin-bottom: 40px;
            text-align: center
        }
    </style>
</head>

<body>
    <div class="group_register">
        <div class="logo_register">
            <img src="https://plus.unsplash.com/premium_photo-1667925014062-42cf381d7273?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="logo">
        </div>
        <div class="container">
            <h2>Register</h2>
            <form action="{{ route('register_action') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="confirm_password">Confirm password:</label>
                    <input type="password" id="confirm_password" name="confirm_password" required>
                </div>
                {{-- PHONE --}}
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" id="phone" name="phone" required>
                </div>
                {{-- Avatar --}}
                <div class="form-group">
                    <label for="avatar">Avatar:</label>
                    <input id="avatar" type="file" name="avatar" value="{{ old('avatar') }}" required>
                </div>
                <div class="form-group">
                    <input type="submit" value="Register">
                </div>

            </form>
        </div>
    </div>
</body>

</html>