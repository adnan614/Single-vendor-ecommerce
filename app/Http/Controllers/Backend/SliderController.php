<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Toastr;

class SliderController extends Controller
{
    public function sliderForm()
    {

        $slider = Slider::all();
        return view('backend.slider.slider_list',compact('slider'));
    }

    public function addSlider()
    {
        return view('backend.slider.add_slider');
    }

    public function create(Request $request)
    {

       
       

        $sliderCreate = new slider;

        $sliderCreate->name = $request->name;
        $sliderCreate->slider_slug = $request->slug_name;
        $sliderCreate->description = $request->description;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename = time() . '.' . $extension;
            $file->move('upload/', $filename);
            $sliderCreate->image = $filename;

        
        }
      
        $sliderCreate->save();

          Toastr::success('slider inserted successfully', 'Success', ["positionClass" => "toast-top-center"]);

          return back();

    }
    public function delete($id)
    {
          $slider = Slider::find($id);
          $slider->delete();

          Toastr::success('Role Deleted Successfully', 'Success', ["positionClass" => "toast-top-center"]);

          return back();

    }
}
