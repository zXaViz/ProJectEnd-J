<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Slider;
use Auth;
use Illuminate\Http\Request;
use App\Http\Services\Slider\SliderService;
use Illuminate\Support\Facades\Hash;

class ListUserController extends Controller
{
    public function list_user()
    {
        if (Auth::check()) {
            $users = User::paginate(2);
            return view('admin.users.list_user', ['title' => 'Danh sach nguoi dung'], ['users' => $users]);
        }
    }

    // Edit user
    public function edit_user(Request $request)
    {
        $user_id = $request->get('id');
        $user = User::find($user_id);
        return view('admin.users.edit_user', ['title' => 'Chinh sua nguoi dung'], ['user' => $user]);
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
            Session()->flash('success', 'Edit success');
            return redirect()->route('list_user');
        } else {
            Session()->flash('success', "Password do not match.
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
            Session()->flash('success', 'Delete user successfully');
            return redirect()->route('list_user');
        }
    }

    //Search User
    public function admin_search_user(Request $request)
    {
        $query = $request->input('result_search_user');

        $search_user = User::where(
            'name',
            'LIKE',
            "%$query%"
        )
            ->orWhere('email', 'LIKE', "%$query%")
            ->paginate(10);
        return view('admin.users.admin_result_search_user', ['title' => 'Tim kiem nguoi dung'], compact('search_user'));
    }
}
