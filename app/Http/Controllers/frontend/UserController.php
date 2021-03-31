<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Toastr;
class UserController extends Controller

    {
        public function userform()
    {
        return view('frontend.user.form');
    }
    public function userstore(Request $request){
        $this->validate($request, [
            'name' =>  'required',
            'contact' =>'required',
            'email' =>  'required',
            // 'email_verified_at'=>'required',
            'password'=>'required',
            'address'=>'required',
            'role'=>'required',

           ]);



        $users = new User();
        $users->name  = $request->input('name');
        $users->contact  = $request->input('contact');
        $users->email  = $request->input('email');
        $users->email_verified_at=$request->input('email_verified_at');
        $users->password  = bcrypt($request->input('password'));
        $users->address  = $request->input('address');
        $users->role  = $request->input('role');

        $users->save();
        Toastr::success('Brand inserted successfully', 'Success', ["positionClass" => "toast-top-right"]);
        
        return redirect()->back()->with('msg', 'Registration Successfully.');
    }


    }


