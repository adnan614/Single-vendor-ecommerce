<?php

use App\Http\Controllers\frontend\ProductController;
use App\Http\Controllers\Backend\LoginController;
<<<<<<< HEAD
use App\Http\Controllers\Backend\BrandsController;
=======
use App\Http\Controllers\Backend\CategoryController;
>>>>>>> e2b4ce6fc114709704c265cd428f1817cf6d376f
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
    return view('frontend.layouts.home');
});


//frontend
Route::get('/frontend/product/product', [ProductController::class, 'view'])->name('frontend.product.product');



// Admin Dashboard

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

Route::get('/backend/brand/brand_form',[BrandsController::class,'brandForm'])->name('brand.form');


//category
Route::get('/category/category_form/', [CategoryController::class, 'categoryForm'])->name('category.form');
Route::post('/category/category_add/', [CategoryController::class, 'categoryAdd'])->name('category.add');
Route::get('/category/category_list/', [CategoryController::class, 'categoryList'])->name('category.list');
