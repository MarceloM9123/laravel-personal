<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Post;

class PostController extends Controller
{
    public function index(){

    	$posts = Post::latest()->get();

    	return view('blog.index', compact('posts'));
    }



    public function create(){

        return view('blog.create');
    }




    public function show(Post $post){

    	return view('blog.show', compact('post'));
    }





    public function store(){

    	// $post = new \App\Post;

    	// $post->title = request('title');

    	// $post->body = request('body');

    	// $post->save();

        $this->validate(request(),[

            'title' => 'required',

            'body' => 'required'

            ]);

    	Post::create(request(['title','body']));

    	return redirect('/blog');
    }
}

