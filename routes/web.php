<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', 'PagesController@home');
Auth::routes();
Route::get('/', 'MessagesController@index');
Route::get('/acDe', 'PagesController@acerca');
Route::get('/post/{message}/ver','MessagesController@show');
Route::get('/post/new', 'MessagesController@new')->middleware('auth');
Route::post('/post/create','MessagesController@create');
Route::get('/{username}','UserController@show');


