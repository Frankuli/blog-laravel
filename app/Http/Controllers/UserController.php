<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($username){
        $user=$this->findByUsername($username);
        //$user=User::where('username',$username)->first();
/*        $posts= Message::where('user_id',$user->id)
            ->orderBy('created_at', 'DESC')
            ->paginate(10);*/
        //dd($user);

        return view('user.show',[
            'user'=>$user,
            'posts'=>$user->messages()->paginate(10),
            'followers' => $user->followers(),
            'follows' => $user->follows()
        ]);
    }
    public function follow($username, Request $request){
        $user=$this->findByUsername($username);
        $me=$request->user();
        //  dd($user);
        $user->follows()->attach($me);
        return redirect("/$username");
    }

    public function unfollow($username, Request $request){
        $user=$this->findByUsername($username);
        $me=$request->user();
        //  dd($user);
        $user->follows()->detach($me);
        return redirect("/$username");
    }

    private function findByUsername($username)    {
        return User::where('username', $username)->first();
    }
}
