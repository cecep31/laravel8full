<?php

use App\Http\Controllers\PostController;
use App\Models\Label;
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

Route::get('/blog', [PostController::class, 'index']);

Route::get('post/{post:slug}', [PostController::class, 'show']);
Route::get('users/class/{label:slug}', function (Label $label) {
    return view('label',[
        'title'=>$label->name,
        'post' => $label->posts,
    ]);
});

