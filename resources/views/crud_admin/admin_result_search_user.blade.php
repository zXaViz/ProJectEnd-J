@include('crud_admin.admin_header')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search user</title>
    <link rel="stylesheet" href="{{ url('CSS/css/reset.css')}}">
    <link rel="stylesheet" href="CSS/css/style.css">

</head>

<style>
    body {
        font-size: 1.6rem;
        font-family: "Poppins", sans-serif;
        background-color: white;
    }

    .container {

        display: inline-block;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        margin-right: 250px;
        min-height: 500px;
    }

    h2 {
        color: #333;
        padding: 20px;
        margin: 0;
        text-align: center;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    table th,
    table td {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    table th {
        background-color: #f2f2f2;
        color: #666;
        text-transform: uppercase;
        font-size: 12px;
        letter-spacing: 1px;
    }

    table tbody tr:hover {
        background-color: #f9f9f9;
    }

    table tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    ul li {
        display: inline-block;
    }

    /* Search User */
    .search-container {
        display: flex;
        width: 400px;
        height: 50px;
        margin-left: 700px;
    }

    input[type="text"] {
        padding: 10px;
        flex: 1;
        border: 1px solid #f0f0f0;
        border-radius: 5px 0 0 5px;
        outline: none;
    }

    button[type="submit"] {
        padding: 10px 20px;
        color: #fff;
        border: none;
        border-radius: 0 5px 5px 0;
        cursor: pointer;
        outline: none;
    }

    button[type="submit"]:hover {
        background-color: #ffbb00ea;
    }
</style>

<body>

    <div class="admin_feature">
        <div class="dashboard_left">
            @include('crud_admin.admin_dashboard')
        </div>
        <!-- List user -->
        <div class="container">
            <div class="main-content">
                <!-- Search user -->

                <div class="search">
                    <div class="main-content">
                        <form action="{{route('admin_search_user')}}">
                            @csrf
                            <div class="search-container">
                                <input type="text" name="result_search_user" placeholder="Search..." />
                                <button type="submit">
                                    <img src="CSS/icon/search.png" width="30px" alt="" />
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <h2>Search User</h2>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>

                    </thead>
                    <tbody>
                        @foreach ($search_user as $user)
                            <tr>
                                <th>{{$user->id }}</th>
                                <th>{{$user->name }}</th>
                                <th>{{$user->email }}</th>
                                <th>
                                    <a href="{{ route('view_user', ['id' => $user->id])}}">View |</a>
                                    <a href="{{ route('edit_user', ['id' => $user->id]) }}">Edit |</a>
                                    <a href="{{ route('delete_user', ['id' => $user->id]) }}">Delete</a>

                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$search_user->links()}}
            </div>
        </div>
    </div>
</body>

</html>
@include('crud_admin.admin_footer')
