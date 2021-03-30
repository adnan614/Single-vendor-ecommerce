<?php

use App\Http\Controllers\frontend\UserController;
use App\Http\Controllers\frontend\ProductController;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\CategoriesController;
use App\Http\Controllers\Backend\ProductsController;
use App\Http\Controllers\frontend\LoginController as Login;
use App\Http\Controllers\Backend\BrandsController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SliderController;

use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    return view ('frontend.layouts.home');
})->name('frontend.layouts.home');










//frontend

Route::get('/frontend/product/view', [ProductController::class, 'view'])->name('frontend.product.view');


//Customer Registration
Route::get('/user/form', [UserController::class, 'userform'])->name('user.form');
Route::post('/user/store', [UserController::class, 'userstore'])->name('user.store');


//Customer Login
Route::get('/user/log', [Login::class, 'userlog'])->name('user.loginform');
Route::post('/user/login', [LoginController::class, 'loginput'])->name('user.login');


//frontend
//product
Route::get('/frontend/product/view/{id}', [ProductController::class,'view'])->name ('frontend.product.view');
Route::get('/frontend/product/allview', [ProductController::class,'allview'])->name ('frontend.product.allview');
//category
// Route::get('/frontend/category/view',[CategoriesController::class,'view'])->name('frontend.product.view');



// Admin Dashboard

Route::get('/admin', function () {
    return view ('backend.home');
});

Route::get('/form', function () {
    return view ('backend.product.form');
});






// admin login


Route::get('/admin/login/form', [LoginController::class, 'show_login'])->name('show.login');
Route::post('/admin/login', [LoginController::class, 'login'])->name('admin.login');
Route::get('/admin/logout', [LoginController::class, 'logout'])->name('admin.logout');
// });

//brand
Route::get('/backend/brand/brand_form', [BrandsController::class, 'brandForm'])->name('brand.form');
Route::post('/backend/brand/brand_add/', [BrandsController::class, 'brandAdd'])->name('brand.add');
Route::get('/backend/brand/brand_list/', [BrandsController::class, 'brandList'])->name('brand.list');
Route::delete('/backend/brand/delete/{id}',[BrandsController::class,'delete'])->name('brand.delete');
// Route::get('/backend/brand/delete/{id}',[BrandsController::class, 'brandDelete'])->name('brand.delete');
Route::get('/backend/brand/edit/{id}',[BrandsController::class, 'brandEdit'])->name('brand.edit');
Route::put('/backend/brand/update/{id}',[BrandsController::class, 'brandUpdate'])->name('brand.update');


// slider

Route::get('/slider/slider_list/', [SliderController::class, 'sliderForm'])->name('slider.show');
Route::get('/slider/slider_form/', [SliderController::class, 'addSlider'])->name('slider.form');
Route::post('/slider/add_slider',[SliderController::class,'create'])->name('add.slider');

Route::delete('/slider/delete/{id}',[SliderController::class,'delete'])->name('slider.delete');


//category




Route::get('/category/category_form/', [CategoriesController::class, 'categoryForm'])->name('category.form');
Route::post('/category/category_add/', [CategoriesController::class, 'categoryAdd'])->name('category.add');
Route::get('/category/category_list/', [CategoriesController::class, 'categoryList'])->name('category.list');

//product
Route::get('/product/product_form/', [ProductsController::class, 'productForm'])->name('product.form');
Route::post('/product/product_add/', [ProductsController::class, 'productAdd'])->name('product.add');
Route::get('/product/product_list/', [ProductsController::class, 'productList'])->name('product.list');




//Customer Registration
Route::get('/user/form', [UserController::class, 'userform'])->name('user.form');
Route::post('/user/store', [UserController::class, 'userstore'])->name('user.store');
Route::get('/user/customer_list/', [UserController::class, 'customerList'])->name('customer.list');
// Route::get('/backend/customer/delete/{id}',[UserController::class, 'customerDelete'])->name('customer.delete');




//Customer Login
Route::get('/user/log', [Login::class, 'userlog'])->name('user.loginform');
Route::post('/user/login', [LoginController::class, 'loginput'])->name('user.login');




