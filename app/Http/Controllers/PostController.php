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





    public function show(Post $post){

        return view('blog.show', compact('post'));
    }





     public function edit(Post $post){

        return view('blog.edit', compact('post'));
    }


    public function update(Post $post){

        $this->validate(request(),[
            
            'title' => 'required',
            
            'body' => 'required'

            ]);

        $post->title = request('title');
        $post->body = request('body');
        $post->save();

        // Post::update(request(['title','body']));

        return redirect('/blog');

    }




    public function destroy(Post $post){

        $post->delete();


    	return redirect('/blog');
    }


}

