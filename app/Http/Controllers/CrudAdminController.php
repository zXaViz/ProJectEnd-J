<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Products;

class CrudAdminController extends Controller
{
    //
    public function admin_home()
    {
        return view('crud_admin.admin_home');
    }
    // Manager list user
    public function admin_list_user()
    {
        if (Auth::check()) {
            $users = User::all();
            return view('crud_admin.admin_list_user', ['users' => $users]);
        }

    }


    // Manager list product
    public function admin_list_product()
    {
        if (Auth::check()) {
            $list_product = Products::all();

            return view('crud_admin.admin_list_product', ['list_product' => $list_product]);
        }
    }
    // admin_edit_product
    public function admin_edit_product(Request $request)
    {
        $product_id = $request->get('product_id');

        $pd = Products::where('product_id', '=', $product_id)->first();
        return view('crud_admin.admin_edit_product');
    }
}
