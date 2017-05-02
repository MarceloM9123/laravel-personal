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

use \App\Post;

Route::get('/', function () {

    $posts = Post::latest()->limit(3)->get();

    return view('index', compact('posts'));
});

Route::get('/blog', 'PostController@index');

Route::get('/blog/create', 'PostController@create')->middleware('auth');

Route::post('/blog', 'PostController@store');

Route::get('/blog/{post}', 'PostController@show');

Route::get('/blog/{post}/edit', 'PostController@edit')->middleware('auth');

Route::put('/blog/{post}', 'PostController@update');

Route::delete('/blog/{post}', 'PostController@destroy');

Auth::routes();



