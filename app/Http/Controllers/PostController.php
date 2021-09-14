<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // dd(request('keyword'));
        //agar ngak n+1 atau query berulang pake with trus kasih(eager)
        $post = Post::latest();

        if(request('find')){
            $post->where('title','like','%'.request('find').'%')->orwhere('body','like','%'.request('find').'%');
        }
        return view('posts', [
            "title" => "blog",
            "active" => "blog",
            "post" => $post->paginate(7)
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
