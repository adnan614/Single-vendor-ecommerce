<?php

namespace App\Http\Controllers\frontend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function view(){
        $category=Category::all();
        return view ('frontend.product.view',compact('category'));
    }
}
