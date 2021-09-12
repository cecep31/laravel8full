<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        //agar ngak n+1 atau query berulang pake with trus kasih(eager)
        $post = Post::with(['user','label'])->latest()->get();
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
