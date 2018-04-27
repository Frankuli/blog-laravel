<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Http\Requests\CreateMessagesRequest;

class MessagesController extends Controller
{
    public function index(){
  		// $posts=[
  		// 	['id'=>1,'text'=>'PRIMER POST','image'=>'http://hrenpixel.com/600/338?1'],
  		// 	['id'=>2,'text'=>'PRIMER POST','image'=>'http://hrenpixel.com/600/338?1'],
  		// 	['id'=>3,'text'=>'PRIMER POST','image'=>'http://lorempixel.com/600/338?1'],
  		// 	['id'=>4,'text'=>'PRIMER POST','image'=>'http://lorempixel.com/600/338?1']
  		// ];
      //$posts = Message::all();

      $posts = Message::paginate(10);
      //dd($posts);
  		return view('welcome',['posts'=>$posts] );
  	}

    public function show(Message $message){
      // $post = Message::find($id);
       //dd($post);
       	return view('post.show',['post'=>$message] );
    }

    public function new(){
      // $post = Message::find($id);
       //dd($post);
        return view('post.new', []);
    }

    public function create(CreateMessagesRequest $request){
        //dd($request->input('content'));
        // $post = Message::find($id);
         //dd($post);

       //dd( $request->input('content'));
       $user=$request->user();

       $post = Message::create([
         'content' => $request->input('content'),
         'image'=> 'http://lorempixel.com/600/338?'.random_int(0,1000),
           'user_id'=>$user->id
       ]);


       //dd($post);
       return redirect('/post/'.$post->id.'/ver');
         //echo "holas";
         	//return view('post.show',['post'=>$message] );
      }
}
