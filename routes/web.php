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

Route::get('/', function () {
    return view('index');
});

Route::get('/blog', 'PostController@index');

Route::get('/blog/create', 'PostController@create');

Route::post('/blog', 'PostController@store');

Route::get('/blog/{post}', 'PostController@show');

Route::get('/blog/{post}/edit', 'PostController@edit');

Route::patch('/blog/{post}', 'PostController@update');

Route::delete('/blog/{post}', 'PostController@destroy');



