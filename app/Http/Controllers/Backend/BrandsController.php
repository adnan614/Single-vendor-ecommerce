<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use Toastr;

class BrandsController extends Controller
{


    public function brandForm(){
        $brands = Brand::all();
        
        return view('backend.layouts.brand.brand_form');
    }

    //add brand
    public function brandAdd(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $brands = new brand;
            $brands->name = $data['name'];
            $brands->description = $data['description'];
            $brands->save();
        }
        Toastr::success('Brand inserted successfully', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->route('brand.list');
    }

    //brand list
    public function brandList()
    {
        $brands = Brand::all();
        
        return view('backend.layouts.brand.brand_list', compact('brands'));
    }
//delete brand
    public function brandDelete($id)
    {
        $brands = Brand::find($id);
        if (!empty($brands)) {
            $brands->delete();
            $message = "Brand deleted Successfully";
        } else {
            $message = "No data found.";
        }
        Toastr::success('Brand deleted successfully', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back()->with('message', $message);
    }

    //edit brand

    public function brandEdit($id){

        $brands=Brand::find($id);
      
       return view('backend.layouts.brand.brand_edit',compact('brands'));
    }

    //update brand

public function brandUpdate(Request $request,$id){


    $brands=Brand::find($id);
    $brands->update([
        'name'=>$request->input('name'),
        'description'=>$request->input('description'),
    ]);
    Toastr::success('Brand updated successfully', 'Success', ["positionClass" => "toast-top-right"]);
    return redirect()->back();


 }

}
