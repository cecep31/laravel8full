<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        $post = Post::all();
        return view('blog', [
            "title" => "blog",
            "active" => "blog",
            "post" => $post
        ]);
    }
}
