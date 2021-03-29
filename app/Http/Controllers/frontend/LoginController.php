<?php

namespace App\Http\Controllers\frontend;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function userlog()
    {
        return view('frontend.user.loginform');
    }

    public function loginput (Request $request)
    {
        $this->validate($request,[
            'email' =>  'required',
            'password' =>  'required',
        ]);

        $credentials=  $request->except('_token');



            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('frontend.layouts.home');
            }else
            {

                return redirect()->back()->withErrors('Invalid Credentials');
            }



        }




}
