<?php

namespace App\Http\Controllers\frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function view(){
        // $product =Product::all();
        return view ('frontend.product.product');
    }
}
