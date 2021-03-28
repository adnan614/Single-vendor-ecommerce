<?php

use App\Http\Controllers\frontend\ProductController;
use App\Http\Controllers\Backend\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view ('frontend.layouts.home');
});


// Admin Dashboard

// Route::group(['middleware' => 'admin'], function () {

Route::get('/admin', function () {
    return view('backend.home');
});

Route::get('/form', function () {
    return view('backend.product.form');
});

//frontend
Route::get('/frontend/product/product',[ProductController::class,'view'])->name('frontend.product.product');
// admin login

Route::get('/admin/login/form', [LoginController::class, 'show_login'])->name('show.login');
Route::post('/admin/login', [LoginController::class, 'login'])->name('admin.login');
Route::get('/admin/logout', [LoginController::class, 'logout'])->name('admin.logout');
// });
