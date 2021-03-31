<?php

namespace App\Http\Controllers\frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function view($id){
         $product =Product::find($id);
        return view ('frontend.product.view',compact('product'));
    }
    public function allview(){
        $product =Product::all();
        return view ('frontend.product.allview',compact('product'));
    }
}
