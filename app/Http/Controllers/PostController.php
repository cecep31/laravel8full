<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        $post = Post::all();
        return view('posts', [
            "title" => "blog",
            "active" => "blog",
            "post" => $post
        ]);
    }
    public function show(Post $post)
    {
        // Post::create([
        //     "title"=>"judulnya 2",
        //     "label_id"=>"1",
        //     "slug"=>"slug2",
        //     "body"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem ab velit voluptates animi, officiis excepturi? Iusto est provident repellat a, minima beatae quas alias impedit dolor aspernatur, laborum neque accusamus."
        // ])
        return view('post', [
            "title" => "blog",
            "active" => "blog",
            "post" => $post
        ]);
    }
}
