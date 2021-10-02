<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Models\Label;
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
    return view('home', [
        'title' => "home",
        "active" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => "about",
        "active" => "about"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);

Route::get('post/{post:slug}', [PostController::class, 'show']);

Route::get('blog/class', function () {
    return view('labels', [
        'title' => "class",
        'active' => 'blog',
        'label' => Label::all()
    ]);
});

Route::get('post/class/{label:slug}', function (Label $label) {
    //pake load juga bisa n+1
    $label->load('post');
    return view('label', [
        'title' => $label->name,
        'active' => 'blog',
        'label' => $label,
        'post' => $label->post,
    ]);
});

Route::get('login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::get('register', [AuthController::class, 'register'])->middleware('guest');
Route::post('register', [AuthController::class, 'store']);
Route::post('login', [AuthController::class, 'authenticate']);
Route::post('logout', [AuthController::class, 'logout']);
Route::get('dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');
