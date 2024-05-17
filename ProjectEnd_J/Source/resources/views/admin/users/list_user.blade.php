@extends('admin.main')

@section('content')
<style>
    .pagination {

        height: 50px;
    }
    /* Search User */
    .search-container {
        display: flex;
        width: 400px;
        height: 50px;
        margin-left: 700px;
        margin: 50px 0
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
        background-color: gray;
    }
</style>
<table class="table">
    <!-- Search user -->

    <div class="search">
        <div class="main-content">
            <form action="{{route('admin_search_user')}}">
                @csrf
                <div class="search-container">
                    <input type="text" name="result_search_user" placeholder="Search..." />
                    <button type="submit">
                        <img src="{{ asset('template/admin/dist/img/search.png')}}" width="30px" alt="" />
                    </button>
                </div>
            </form>
        </div>
    </div>
    <thead>
        <tr>
            <th style="width: 50px">ID</th>
            <th>Tên người dùng</th>
            <th>Email</th>
            <th>Avatar</th>
            <th>Số điện thoại</th>
            <th>ACtion</th>
            <th style="width: 100px">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <th>{{$user->id }}</th>
                <th>{{$user->name }}</th>
                <th>{{$user->email }}</th>
                <th><img src="{{ asset('template/admin/dist/img/' . $user->avatar) }}" height="40px"></th>
                <th>{{$user->phone}}</th>
                <th>
                    <a href="{{ route('edit_user', ['id' => $user->id]) }}">Edit |</a>
                    <a href="{{ route('delete_user', ['id' => $user->id]) }}">Delete</a>
                </th>
            </tr>

        @endforeach

    </tbody>

</table>
<div class="pagination">
    {{$users->links()}}
</div>

@endsection