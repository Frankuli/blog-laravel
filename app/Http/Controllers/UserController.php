<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($username){
        $user=User::where('username',$username)->first();
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
}
