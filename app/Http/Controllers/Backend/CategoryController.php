<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Toastr;

class CategoryController extends Controller
{
    public function categoryForm()
    {
        $levels = Category::where('parent_id', 0)->get();
        return view('backend.layouts.category.category_form', compact('levels'));
    }


    public function categoryAdd(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $category = new category;
            $category->category_name = $data['category_name'];
            $category->parent_id = $data['parent_id'];
            $category->description = $data['description'];
            $category->save();
        }
        Toastr::success('Category inserted successfully', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->route('category.list');
    }


    public function categoryList()
    {
        $categories = Category::with('categories')->where('parent_id', '=', 0)->get();
        return view('backend.layouts.category.category_list', compact('categories'));
    }
}
