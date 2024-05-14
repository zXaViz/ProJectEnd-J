<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;
use App\Notifications\MyNotification;

class CrudUserController extends Controller
{
    // Home
    public function home()
    {
        return view('home');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function login()
    {
        return view('crud_user.login');
    }
    //Login action
    public function login_action(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',

        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $users = User::all();

            foreach ($users as $user) {
                if ($user->email == $request['email']) {
                    // Quyen truy cap nguoi ban hang
                    if ($user->role == '2') {
                        toastr()->success('Permision seller. Login successfully');
                        return view('crud_admin.admin_home', ['user'=>$user]);
                        
                        // return redirect()->route('seller_home');
                    }
                    // Quyen truy cap gnuoi dung
                    else {
                        toastr()->success('Login successfully');
                        return redirect()->route('home');
                    }
                }
            }
        }
        toastr()->error('Wrong account information');
        return redirect('login');
    }

    //Forgot password
    public function forgot_password()
    {
        echo 'Forgot password';
        die();
    }

  
    //Register
    public function register()
    {
        return view('crud_user.register');
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
            return redirect('login')->withSuccess('Account successfully created');
        } else {
            toastr()->error('Password do not match');
        }
        // return redirect('register');
    }
    // View user
    public function view_user(Request $request)
    {
        $user_id = $request->get('id');
        $user = User::find($user_id);
        return view('crud_user.view_user', ['user' => $user]);
    }
    // Edit user
    public function edit_user(Request $request)
    {
        $user_id = $request->get('id');
        $user = User::find($user_id);
        return view('crud_user.edit_user', ['user' => $user]);
    }

    // Update edit user
    public function update_edit_user(Request $request)
    {
        $input = $request->all();
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'confirm_password' => 'required|min:8',
        ]);
        if ($request['password'] == $request['confirm_password']) {
            $user = User::find($input['id']);
            $user->name = $input['name'];
            $user->email = $input['email'];
            $user->password = Hash::make($input['password']);
            $user->save();
            toastr()->success('Edit success');
            return redirect()->route('admin_list_user');
        } else {
            toastr()->error("Password do not match.
            Edit faild");
        }
        return redirect('list_user');
    }


    // Delete user
    public function delete_user(Request $request)
    {
        $user_id = $request->get('id');
        $user = User::find($user_id);
        if ($user) {
            $user->delete();
            toastr()->success('Delete user successfully');
            return Redirect('login');
        }
    }

    //Logout
    public function logout()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }

}