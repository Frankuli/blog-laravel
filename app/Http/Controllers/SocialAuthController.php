<?php

namespace App\Http\Controllers;

use App\SocialProfile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller{
    public function facebook (){
        return Socialite::driver('facebook')->redirect();
    }
    public function callback(){
        $user = Socialite::driver('facebook')->user();
        //dd($user);
        session()->flash('facebookUser', $user);
        return view('user.facebook',['user'=>$user]);
    }
    public function register(Request $request){
        $data= session('facebookUser');
        $userName=$request->input('username');
        $user= User::create([
           'name' => $data->getName(),
           'email' => $data->email,
           'password' => str_random(16),
           'avatar' => $data->avatar,
           'username' => $userName
        ]);

        $profile=SocialProfile::create([
            'social_id' => $data->id,
            'user_id' =>$user->id
        ]);

        \auth()->login($user);

        return view('/');
    }

}
