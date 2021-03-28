<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Toastr;

class LoginController extends Controller
{
    public function show_login()
    {
        return view('backend.admin_login.admin_login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $login_info = $request->except(['_token']);

        if (Auth::attempt($login_info)) {

            if (auth()->user()->role == 'admin') {

                Toastr::success('Login in successfully!', 'success', ["positionClass" => "toast-top-center"]);
                $request->session()->regenerate();
                return redirect()->to('/admin');
            } else {
                return redirect()->route('show.login')->withErrors('Invalid Credentials');
            }
        } else {
            return redirect()->route('show.login')->withErrors('Invalid Credentials');
        }
    }

    public function logout()
    {
        //logout here

        Toastr::success('Log Out in successfully!', 'success', ["positionClass" => "toast-top-center"]);
        Auth::logout();

        return redirect()->to('/admin/login/form');
    }
}
