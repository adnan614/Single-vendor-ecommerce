<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Toastr;

class CategoriesController extends Controller
{
    public function categoryForm()
    {
        $categories = Category::where('parent_id', 0)->get();
        $categories_dropdown = "<option value='' selected >Select</option>";
        foreach ($categories as $cat) {
            $categories_dropdown .= "<option value='" . $cat->id . "'  >" . $cat->category_name . "</option>";
            $sub_categories = Category::where('parent_id', $cat->id)->get();
            foreach ($sub_categories as $sub_cat) {
                $categories_dropdown .= "<option value='" . $sub_cat->id . "'>&nbsp;--&nbsp" . $sub_cat->category_name . "</option>";
                $sub_sub_categories = Category::where('parent_id', $sub_cat->id)->get();
                foreach ($sub_sub_categories as $sub_sub_cat) {
                    $categories_dropdown .= "<option value='" . $sub_sub_cat->id . "'>&nbsp;--&nbsp --&nbsp" . $sub_sub_cat->category_name . "</option>";
                }
            }
        }
        return view('backend.layouts.category.category_form', compact('categories_dropdown'));
    }


    public function categoryAdd(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $category = new category;
            $category->category_name = $data['category_name'];
            $category->parent_id = $data['parent_id'];
            $category->description = $data['description'];
            $category->category_slug = $data['category_slug'];
            $category->save();
        }
        Toastr::success('Category inserted successfully', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->route('category.list');
    }


    public function categoryList()
    {
        $categories = Category::with('categories')->get();
        return view('backend.layouts.category.category_list', compact('categories'));
    }
}
