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

class CrudProductController extends Controller
{

    //Prouduct
    public function product(){
        return view('crud_product.product');
    }
    // Style men
    public function style_men(){
        return view('crud_product.style_men');
    }
    
}