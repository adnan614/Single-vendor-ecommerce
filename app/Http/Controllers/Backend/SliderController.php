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
        return view('backend.slider.slider_list');
    }

    public function addSlider()
    {
        return view('backend.slider.add_slider');
    }

    public function create(Request $request)
    {
       
        $request->validate([
              'name'=> 'required',
              'slug_name'=>'required',
              'image'=>'required'
        ]);

        $slideCreate = new slider;

        $slideCreate->name = $request->name;
        $slideCreate->slider_slug = $request->slug_name;
        $slideCreate->description = $request->description;

         if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename = time() . '.' . $extension;
            $file->move('upload/', $filename);
             $slideCreate->image = $filename;
        }
         $slideCreate->save();

          Toastr::success('slider inserted successfully', 'Success', ["positionClass" => "toast-top-center"]);

          return back();

    }
}
