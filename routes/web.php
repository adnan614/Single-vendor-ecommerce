<?php

use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\CategoryController;
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
    return view('frontend.master');
});


// Admin Dashboard

// Route::group(['middleware' => 'admin'], function () {

Route::get('/admin', function () {
    return view('backend.home');
});

Route::get('/form', function () {
    return view('backend.product.form');
});

// admin login

Route::get('/admin/login/form', [LoginController::class, 'show_login'])->name('show.login');
Route::post('/admin/login', [LoginController::class, 'login'])->name('admin.login');
Route::get('/admin/logout', [LoginController::class, 'logout'])->name('admin.logout');
// });


//category
Route::get('/category/category_form/', [CategoryController::class, 'categoryForm'])->name('category.form');
Route::post('/category/category_add/', [CategoryController::class, 'categoryAdd'])->name('category.add');
Route::get('/category/category_list/', [CategoryController::class, 'categoryList'])->name('category.list');


