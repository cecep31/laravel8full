<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        $post = Post::latest()->get();
        return view('posts', [
            "title" => "blog",
            "active" => "blog",
            "post" => $post
        ]);
    }
    public function show(Post $post)
    {
        return view('post', [
            "title" => "blog",
            "active" => "blog",
            "post" => $post
        ]);
    }
}
