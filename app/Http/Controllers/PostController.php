<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Post;

use Image;

use Illuminate\Support\Facades\Input;

use Storage;

class PostController extends Controller
{
    

    public function index(){

    	$posts = Post::latest()->get();

    	return view('blog.index', compact('posts'));
    }




    public function create(){

        return view('blog.create');
    }




    public function store(Request $request){

        $this->validate(request(),[

            'title' => 'required',

            'body' => 'required',

            'img' => 'required'

            ]);

        $post = new \App\Post;

        $post->title = request('title');

        $post->body = request('body');
        
        $post->img = request('img')->getClientOriginalName();

        $post->save();


        // Post::create(request(['title','body', 'post_img']));

        $image = Input::file('img');

        $filename = $image->getClientOriginalName();

        Storage::putFileAs('/public', $image, $filename);



        // if(Input::hasFile('post_img')){

        //     $img = Input::file('post_img');

        //     $filename = $post_img->getClientOriginalName();

        //     $img->move('uploads', $filename);
        // }

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
            
            'body' => 'required',

            'img' => 'required'
            ]);

        $post->title = request('title');
        $post->body = request('body');
        $post->img = request('img')->getClientOriginalName();
        $post->save();

        $image = Input::file('img');

        $filename = $image->getClientOriginalName();

        Storage::putFileAs('/public', $image, $filename);

        // Post::update(request(['title','body']));

        return redirect('/blog');

    }




    public function destroy(Post $post){

        $post->delete();


    	return redirect('/blog');
    }


}

