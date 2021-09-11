<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home',[
        'title' => "home",
        "active" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        'title' => "about",
        "active" => "about"
    ]);
});

Route::get('/blog', function () {
    $post = Post::all();
    return view('blog',[
        "title" => "blog",
        "active" => "blog",
        "post" => $post
    ]);
});

Route::get('post/{slug}', function ($slug) {
    $post = Post::find($slug);
    return view("post",[
        "title" => "blog",
        "active" => "blog",
        "post" => $post
    ]);
});
