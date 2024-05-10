<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Users\LoginController;




Route::get('/admin/users/login',[LoginController::class, 'index']);
Route::get('/admin/users/login/store',[LoginController::class, 'store']);
