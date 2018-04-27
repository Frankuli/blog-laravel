<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller{
	public function home(){
		$posts=[
			['id'=>1,'text'=>'PRIMER POST','image'=>'http://hrenpixel.com/600/338?1'],
			['id'=>2,'text'=>'PRIMER POST','image'=>'http://hrenpixel.com/600/338?1'],
			['id'=>3,'text'=>'PRIMER POST','image'=>'http://lorempixel.com/600/338?1'],
			['id'=>4,'text'=>'PRIMER POST','image'=>'http://lorempixel.com/600/338?1']
		];
		return view('welcome',['posts'=>$posts] );
	}
	public function acerca(){
		$links=["Git Hub"=>"http://megithub","Face"=>"http://meface.com","Twitter"=>"http//:metwitter.com"];
		$site="Mi sitio Personal";
    	return view('acDe',[
    		'links'=>$links,
    		'sitio'=>$site]);
	}
}
