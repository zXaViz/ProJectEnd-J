<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    //Đăng nhập thông tin
    public function index()
    {
        return view('admin.users.login', [
            'title' => 'Đăng Nhập Hệ Thống'
        ]);
    }

    public function store(Request $request)
    {
        //Xử lý bắt buộc nhập
        $this->validate($request, [
            'email' => 'required|email:filter',
            'password' => 'required'
        ]);
        //Xử lý đăng nhập
        if (Auth::attempt([
                'email' => $request->input('email'),
                'password' => $request->input('password')
            ], $request->input('remember'))) {

            return redirect()->route('admin');
        }
        //Kiểm tra lỗi
        Session::flash('error', 'Email hoặc Password không đúng');
        return redirect()->back();
    }
}
