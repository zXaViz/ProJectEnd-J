<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function register()
    {

        return view('admin.users.register', [
            'title' => 'Đăng ký tài khoản'
        ]);
    }
    public function register_action(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'confirm_password' => 'required|min:8',
            'phone' => 'required',
            'avatar' => 'required',
        ]);

        $data = $request->all();

        if ($data['password'] == $data['confirm_password']) {
            $check = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'phone' => $data['phone'],
                'avatar' => $data['avatar'],
            ]);
            return redirect()->route('login')->with('success', 'Account successfully created');
        }
    }
}
