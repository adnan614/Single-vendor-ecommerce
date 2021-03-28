<?php

use App\Http\Controllers\frontend\ProductController;
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


Route::get('/admin', function () {
    return view('backend.home');

});

Route::get('/form', function () {
    return view('backend.product.form');

});

//frontend
Route::get('/frontend/product/product',[ProductController::class,'view'])->name('frontend.product.product');
