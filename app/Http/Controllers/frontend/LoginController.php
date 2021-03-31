<?php

namespace App\Http\Controllers\frontend;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use App\Models\user;
class LoginController extends Controller
{
    public function userlog()
    {
        return view('frontend.user.loginform');
    }

    public function loginput(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'email' =>  'required',
            'password' =>  'required',
        ]);

        $credentials=  $request->except('_token');



        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->to('/');
        } else {
            return redirect()->back()->withErrors('Invalid Credentials');
        }
    }
    //Google login
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    //Google Callback
    public function handleGoogleCallback()
    {
        $user=Socialite::driver('google')->user();
        $this->_registerOrLoginUser($user);
        //return home after log in
        return redirect()->route('homepage');
    }
    protected function _registerOrLoginUser($data)
    {
        $user=User::where('email', '=', $data->email)->first();
        if (!$user) {
            $user=new User();
            $user->name=$data->name;
            $user->email=$data->email;
            $user->provider_id=$data->id;
            $user->avatar=$data->avatar;
            $user->save();
        }
        Auth::login($user);
    }
    //Facebook login
    public function redirectToFacebook()
    {
        return Socialite::driver('google')->redirect();
    }

    //Facebook Callback
    public function handleFacebookCallback()
    {
        $user=Socialite::driver('google')->user();
        $this->_registerOrFacebookUser($user);
        //return home after log in
        return redirect()->route('homepage');
    }
    protected function _registerOrFacebookUser($data)
    {
        $user=User::where('email', '=', $data->email)->first();
        if (!$user) {
            $user=new User();
            $user->name=$data->name;
            $user->email=$data->email;
            $user->provider_id=$data->id;
            $user->avatar=$data->avatar;
            $user->save();
        }
        Auth::login($user);
    }
 //Github login
 public function redirectToGithib()
 {
     return Socialite::driver('google')->redirect();
 }

 //Github Callback
 public function handleGithubCallback()
 {
     $user=Socialite::driver('google')->user();
     $this->_registerOrGithubUser($user);
     //return home after log in
     return redirect()->route('homepage');
 }
 protected function _registerOrGithubUser($data)
 {
     $user=User::where('email', '=', $data->email)->first();
     if (!$user) {
         $user=new User();
         $user->name=$data->name;
         $user->email=$data->email;
         $user->provider_id=$data->id;
         $user->avatar=$data->avatar;
         $user->save();
     }
     Auth::login($user);
 }


        public function logout()
        {

      Auth::logout();
      return redirect()->back();

        }
}






