<?php

use App\Http\Controllers\CrudAdminController;
use App\Http\Controllers\CrudSellerController;
use App\Http\Controllers\CrudUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Home
Route::get('Hui', [CrudUserController::class, 'home'])->name('home');
//Dashboard
Route::get('dashboard', [CrudUserController::class, 'dashboard'])->name('dashboard');

//Login
Route::get('login', [CrudUserController::class, 'login'])->name('login');
Route::post('login_action', [CrudUserController::class, 'login_action'])->name('login_action');

//List user
Route::get('list_user', [CrudUserController::class, 'list_user'])->name('list_user');

//Logout
Route::get('logout', [CrudUserController::class, 'logout'])->name('logout');

//Register
Route::get('register', [CrudUserController::class, 'register'])->name('register');
Route::post('register_action', [CrudUserController::class, 'register_action'])->name('register_action');

// Edit user
Route::get('edit_user', [CrudUserController::class, 'edit_user'])->name('edit_user');
Route::post('update_edit_user', [CrudUserController::class, 'update_edit_user'])->name('udpate_edit_user');
//Delete user
Route::get('delete_user', [CrudUserController::class, 'delete_user'])->name('delete_user');


Route::get('forgot_password', [CrudUserController::class, 'forgot_password'])->name('forgot_password');
// View user
Route::get('view_user', [CrudUserController::class, 'view_user'])->name('view_user');


// ======================================= Admin =====================================
Route::get('admin_home', [CrudAdminController::class, 'admin_home'])->name('admin_home');
Route::get('admin_list_user', [CrudAdminController::class, "admin_list_user"])->name('admin_list_user');
Route::get('admin_list_product', [CrudAdminController::class, "admin_list_product"])->name('admin_list_product');
Route::get('admin_edit_product', [CrudAdminController::class, "admin_edit_product"])->name('admin_edit_product');
// Sreach user
Route::get('admin_search_user',[CrudAdminController::class, 'admin_search_user'])->name('admin_search_user');

// ======================================= Product ==================================
Route::get('product', [CrudProductController::class,'product'])->name('product');
Route::get('style_men', [CrudProductController::class, 'style_men'])->name('style_men');
