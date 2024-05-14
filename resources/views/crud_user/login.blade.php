<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ url('CSS/css/reset.css')}}">
    <link rel="stylesheet" href="CSS/css/style.css">

</head>
<style>
form {
    padding: 20px;
}

.login-container {
    margin: auto;
    margin-top: 80px;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);
    width: 400px;
    margin-bottom: 50px;
    height: 400px;
}

h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

.input-group {
    position: relative;
    margin-bottom: 20px;
}

.input-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 16px;
}

.input-group label {
    position: absolute;
    left: 10px;
    top: 50%;
    transform: translateY(-50%);
    color: #888;
    pointer-events: none;
    transition: 0.3s ease-out;
}


button {
    margin-top: 10px;
    width: 100%;
    padding: 10px;
    background-color: #ffb900;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #ffbb0067;
}

/* Header */
header {

    background-color: #fffcf4;
}

.header {
    display: flex;
    align-items: center;
}

.header .logo {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    padding: 5px;
}

.header .title {
    font-size: 50px;
    margin-left: 30px;
}

h2 {
    font-size: 40px;
}

.login-container .span {

    width: 100%;
    height: 1px;
    background-color: #333;
    margin-top: 30px;
    margin-bottom: 30px;
}

.action-register .btn-register {

    padding: 10px;
    background-color: #ffb900;
    color: #fff;
    border-radius: 4px;
    cursor: pointer;
    margin: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 50%;
}

.action-register .btn-register:hover {
    background-color: #ffbb0067;
}
</style>

<body>
    <header>
        <div class="main-content">
            <div class="header">

                <img src="CSS/img/logo.jpg" alt="hui_ecommerce" class="logo">

                <div class="title"><span>Login</span></div>
            </div>

        </div>

    </header>
    <div class="login-container">
        <form action="{{ route('login_action')}}" method="post">
            @csrf
            <h2>Login</h2>
            <div class="input-group">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="input-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <a href="{{route('forgot_password')}}">Forgot password</a>

            <button type="submit">Login</button>
            <div class="span"></div>

            <div class="action-register">
                <a href="{{ route('register') }}" class="btn-register">Register</a>
            </div>
        </form>
    </div>
    @include('footer')
</body>

</html>