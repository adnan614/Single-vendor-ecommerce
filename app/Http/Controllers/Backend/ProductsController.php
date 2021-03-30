<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use Toastr;

class ProductsController extends Controller
{
    public function productForm()
    {
        //previous way

        // $categories = Category::where('parent_id', 0)->get();
        // $categories_dropdown = "<option value='' selected disabled>Select</option>";
        // foreach ($categories as $cat) {
        //     $categories_dropdown .= "<option value='" . $cat->id . "' selected disabled>" . $cat->cat_name . "</option>";
        //     $sub_categories = Category::where('parent_id', $cat->id)->get();
        //     foreach ($sub_categories as $sub_cat) {
        //         $categories_dropdown .= "<option value='" . $sub_cat->id . "'>&nbsp;--&nbsp" . $sub_cat->cat_name . "</option>";
        //     }
        // }



        //new way

        // $all = Category::where('parent_id', 1)->get();
        // if(count($all)>0){

        //     foreach($all as $child){
        //         $elsechild = Category::where('parent_id', $child->id)->get();
        //         if($elsechild->count() > 0){
        //            echo $child;
        //            productForm($child->id);
        //         }

        //     }

        // }


        $categories = Category::all();
        $brands = Brand::all();

        return view('backend.layouts.product.product_form', compact('categories', 'brands'));



    }


    public function productAdd(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
        }
        $productStore = new product;
        $productStore->category_id = $data['category_id'];
        $productStore->brand_id = $data['id'];
        $productStore->name = $data['name'];
        $productStore->quantity = $data['quantity'];
        $productStore->color = $data['color'];
        $productStore->buying_price = $data['buying_price'];
        $productStore->selling_price = $data['selling_price'];
        $productStore->product_slug = $data['product_slug'];
        $productStore->description = $data['description'];


        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename = time() . '.' . $extension;
            $file->move('upload/', $filename);
            $productStore->image = $filename;

        }
        $productStore->save();

        Toastr::success('product inserted successfully', 'Success', ["positionClass" => "toast-top-center"]);

        return back();
    }


    public function productList()
    {
        $productStore=Product::with('categoryRelation')->get();

        return view('backend.layouts.product.product_list', compact('productStore'));
    }
}
