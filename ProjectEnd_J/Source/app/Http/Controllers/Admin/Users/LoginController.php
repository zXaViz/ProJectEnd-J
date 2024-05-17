<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Slider;
use App\Models\Menu;


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
        $request->validate([
            'email' => 'required',
            'password' => 'required',

        ]);
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $users = User::all();
            $sliders = Slider::all();
            $menus = Menu::all();
            $products  = Product::all();
            $title = "Nhom DC J";
            foreach ($users as $user) {
                if ($user->email == $request['email']) {
                    // Quyen truy cap nguoi ban hang
                    if ($user->role == '2') {
                        Session()->flash('success', 'Admin. Login successfully');
                        return view('admin.home', [
                            'title' => 'Trang Quản Trị Admin'
                        ]);

                        // return redirect()->route('seller_home');
                    }
                    // Quyen truy cap gnuoi dung
                    else {
                       
                        Session()->flash('success', 'Login successfully');
                       
                        return view('home', compact('sliders', 'menus', 'products', 'title'));
                    }
                }   
            }
        }

        return redirect('login');
    }
    //  Logout
    public function logout(){
        Session::flush();
        Auth::logout();

        return redirect()->route('login');
    }
}
