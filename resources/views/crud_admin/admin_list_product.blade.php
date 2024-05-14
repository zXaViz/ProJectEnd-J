@include('crud_admin.admin_header')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Reset -->
    <link rel="stylesheet" href="{{url('CSS/css/reset.css')}}">

    <!-- Style -->
    <link rel="stylesheet" href="CSS/css/style.css">
    <title>List product</title>
</head>
<style>
    .container {
        max-width: 1170px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    th,
    td {
        text-align: left;
    }

    h1 {
        text-align: center;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th {
        background-color: #f2f2f2;

    }

    .btn {
        padding: 8px 16px;
        background-color: red;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-bottom: 20px;
    }

    .btn:hover {
        background-color: #45a049;
    }

    .btn-danger {
        background-color: #f44336;
    }

    .btn-danger:hover {
        background-color: #db4436;
    }

    .btn-add {
        margin-top: 20px;

    }

    .admin_feature .dashboard_right {
        background-color: #fffcf4;
    }

    .dashboard_right .container tr th {
        padding: 15px;
    }

    .dashboard_right .information_product tr {
        border-bottom: 1px solid black;

    }

    table .information_product td {
        padding-top: 20px;

    }

    table .information_product .edit_img img {
        width: 150px;
        height: 150px;
        object-fit: cover;
        margin-right: 10px;
        border-radius: 5px;

    }
</style>

<body>
    <div class="admin_feature">
        <div class="dashboard_left">
            @include('crud_admin.admin_dashboard')
        </div>
        <div class="dashboard_right">
            <div class="list_product">
                <div class="main-content">
                    <div class="container">
                        <h1>List Product</h1>
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name Product</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="information_product">
                                @foreach ($list_product as $product_item)
                                    <tr>
                                        <td>{{$product_item->product_id}}</td>
                                        <td>{{$product_item->name}}</td>
                                        <td>{{$product_item->description}}</td>
                                        <td>{{$product_item->price}}</td>
                                        <td class="edit_img"><img src="CSS/icon/{{$product_item->product_image}}"
                                                alt="Image"></td>
                                        <td>
                                            <a href="{{route('admin_edit_product', ['product_id' => $product_item->product_id])}}"><button class="btn">Edit</button></a>
                                            <a href=""><button class="btn btn-danger">Delete</button></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <button class="btn btn-add">Add Product</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
@include('crud_admin.admin_footer')