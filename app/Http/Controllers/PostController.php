<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;

class PostController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index() {

        $posts = Post::latest()->filter(request(['month', 'year']))->get();

        $archives = Post::archives();

        return view('post.index', compact('posts', 'archives'));

    }

    public function show(Post $post) {

        return view('post.show', compact('post'));

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

        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);


        /*
        Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'user_id' => auth()->id()
        ]);*/


        //Post::create(request(['title','body', 'user_id']));

        auth()->user()->publish(new Post(request(['title', 'body'])));

        return redirect('/');


    }
}
