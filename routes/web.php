<?php
use App\Http\Controllers\frontend\UserController;
use App\Http\Controllers\frontend\ProductController;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\frontend\LoginController as Login;
use App\Http\Controllers\Backend\BrandsController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\frontend\CategoriesController;
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
})->name('frontend.layouts.home');






//frontend
//product
Route::get('/frontend/product/view', [ProductController::class,'view'])->name ('frontend.product.view');
//category
// Route::get('/frontend/category/view',[CategoriesController::class,'view'])->name('frontend.product.view');



// Admin Dashboard

Route::get('/admin', function () {
    return view ('backend.home');
});

Route::get('/form', function () {
    return view('backend.product.form');
});




    // admin login

// admin login


Route::get('/admin/login/form', [LoginController::class, 'show_login'])->name('show.login');
Route::post('/admin/login', [LoginController::class, 'login'])->name('admin.login');
Route::get('/admin/logout', [LoginController::class, 'logout'])->name('admin.logout');
// });

//brand
Route::get('/backend/brand/brand_form',[BrandsController::class,'brandForm'])->name('brand.form');
Route::post('/backend/brand/brand_add/', [BrandsController::class, 'brandAdd'])->name('brand.add');
Route::get('/backend/brand/brand_list/', [BrandsController::class, 'brandList'])->name('brand.list');
Route::get('/backend/employee/delete/{id}',[BrandsController::class, 'brandDelete'])->name('brand.delete');



//category
Route::get('/category/category_form/', [CategoryController::class, 'categoryForm'])->name('category.form');
Route::post('/category/category_add/', [CategoryController::class, 'categoryAdd'])->name('category.add');
Route::get('/category/category_list/', [CategoryController::class, 'categoryList'])->name('category.list');
//Customer Registration
Route::get('/user/form', [UserController::class, 'userform'])->name('user.form');
Route::post('/user/store', [UserController::class, 'userstore'])->name('user.store');


//Customer Login
Route::get('/user/log', [Login::class, 'userlog'])->name('user.loginform');
Route::post('/user/login', [LoginController::class, 'loginput'])->name('user.login');
