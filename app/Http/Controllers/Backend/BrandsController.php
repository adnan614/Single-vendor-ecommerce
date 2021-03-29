<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandsController extends Controller
{


    public function brandForm(){
        
        return view('backend.layouts.brand.add_brand');
    }

}
