<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->only(['create', 'store']);
    }

    public function index() {
        if(request(['month', 'year'])) {
            $posts = Post::latest()
                ->filter(request(['month', 'year']))
                ->get();
        }
        else {
            $posts = Post::latest()->get();
        }

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post) {
        return view('posts.show', compact('post'));
    }

    public function create() {
        return view('posts.create');
    }

    public function store() {
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required',
        ]);

        Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'user_id' => auth()->id()
        ]);

        return redirect('/');
    }
}
