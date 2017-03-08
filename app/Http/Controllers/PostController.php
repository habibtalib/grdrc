<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    //

    public function index() {

        return view('post.index');

    }

    public function show() {

        return view('post.show');

    }

    public function create() {

        return view('post.create');

    }

    public function store() {

        //dd(request()->all());
        //dd(request(['title','body']));
        
        /*
        $post = new Post;
        $post->title = request('title');
        $post->body = request('body');
        $post->save();
        */

        /*Post::create([
            'title' => request('title'),
            'body' => request('body')
        ]);
        */

        Post::create(request(['title','body']));

        return redirect('/');


    }
}
