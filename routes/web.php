<?php

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
    $post = [
        [
            "id" => "1",
            "slug" => "1",
            "title" => "mantap lah",
            "author" => "cecep",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure incidunt placeat porro cumque, facilis dicta? Rerum minima ut sed repellendus eaque! Similique, obcaecati fugiat vero dolorum magnam odit eum neque pariatur sunt doloremque veniam perspiciatis recusandae at praesentium voluptates asperiores perferendis sed aperiam id reprehenderit delectus. Provident, nisi optio! Mollitia, enim odit! Modi eaque eos sed ad, officia consequuntur! Saepe facilis quae mollitia, atque at vel in omnis delectus ab excepturi et necessitatibus consequuntur, aliquam ipsum perferendis ducimus exercitationem. Aliquam, accusantium aspernatur incidunt ad nemo at consectetur est quo officiis!"
        ],
        [
            "id" => "2",
            "slug" => "2",
            "title" => "sdasd lah",
            "author" => "noob",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure incidunt placeat porro cumque, facilis dicta? Rerum minima ut sed repellendus eaque! Similique, obcaecati fugiat vero dolorum magnam odit eum neque pariatur sunt doloremque veniam perspiciatis recusandae at praesentium voluptates asperiores perferendis sed aperiam id reprehenderit delectus. Provident, nisi optio! Mollitia, enim odit! Modi eaque eos sed ad, officia consequuntur! Saepe facilis quae mollitia, atque at vel in omnis delectus ab excepturi et necessitatibus consequuntur, aliquam ipsum perferendis ducimus exercitationem. Aliquam, accusantium aspernatur incidunt ad nemo at consectetur est quo officiis!"
        ],
        [
            "id" => "3",
            "slug" => "3",
            "title" => "holo lah",
            "author" => "cecep",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure incidunt placeat porro cumque, facilis dicta? Rerum minima ut sed repellendus eaque! Similique, obcaecati fugiat vero dolorum magnam odit eum neque pariatur sunt doloremque veniam perspiciatis recusandae at praesentium voluptates asperiores perferendis sed aperiam id reprehenderit delectus. Provident, nisi optio! Mollitia, enim odit! Modi eaque eos sed ad, officia consequuntur! Saepe facilis quae mollitia, atque at vel in omnis delectus ab excepturi et necessitatibus consequuntur, aliquam ipsum perferendis ducimus exercitationem. Aliquam, accusantium aspernatur incidunt ad nemo at consectetur est quo officiis!"
        ],
    ];
    return view('blog',[
        "title" => "blog",
        "active" => "blog",
        "post" => $post
    ]);
});

Route::get('post/{slug}', function ($slug) {
    $post = [
        [
            "id" => "1",
            "slug" => "1",
            "title" => "mantap lah",
            "author" => "cecep",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure incidunt placeat porro cumque, facilis dicta? Rerum minima ut sed repellendus eaque! Similique, obcaecati fugiat vero dolorum magnam odit eum neque pariatur sunt doloremque veniam perspiciatis recusandae at praesentium voluptates asperiores perferendis sed aperiam id reprehenderit delectus. Provident, nisi optio! Mollitia, enim odit! Modi eaque eos sed ad, officia consequuntur! Saepe facilis quae mollitia, atque at vel in omnis delectus ab excepturi et necessitatibus consequuntur, aliquam ipsum perferendis ducimus exercitationem. Aliquam, accusantium aspernatur incidunt ad nemo at consectetur est quo officiis!"
        ],
        [
            "id" => "2",
            "slug" => "2",
            "title" => "sdasd lah",
            "author" => "noob",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure incidunt placeat porro cumque, facilis dicta? Rerum minima ut sed repellendus eaque! Similique, obcaecati fugiat vero dolorum magnam odit eum neque pariatur sunt doloremque veniam perspiciatis recusandae at praesentium voluptates asperiores perferendis sed aperiam id reprehenderit delectus. Provident, nisi optio! Mollitia, enim odit! Modi eaque eos sed ad, officia consequuntur! Saepe facilis quae mollitia, atque at vel in omnis delectus ab excepturi et necessitatibus consequuntur, aliquam ipsum perferendis ducimus exercitationem. Aliquam, accusantium aspernatur incidunt ad nemo at consectetur est quo officiis!"
        ],
        [
            "id" => "3",
            "slug" => "3",
            "title" => "holo lah",
            "author" => "cecep",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure incidunt placeat porro cumque, facilis dicta? Rerum minima ut sed repellendus eaque! Similique, obcaecati fugiat vero dolorum magnam odit eum neque pariatur sunt doloremque veniam perspiciatis recusandae at praesentium voluptates asperiores perferendis sed aperiam id reprehenderit delectus. Provident, nisi optio! Mollitia, enim odit! Modi eaque eos sed ad, officia consequuntur! Saepe facilis quae mollitia, atque at vel in omnis delectus ab excepturi et necessitatibus consequuntur, aliquam ipsum perferendis ducimus exercitationem. Aliquam, accusantium aspernatur incidunt ad nemo at consectetur est quo officiis!"
        ],
    ];
    $new_post= [];
    foreach ($post as $key) {
        if ($key["slug"] === $slug) {
            $new_post = $key;
        }
    }
    return view("post",[
        "title" => "blog",
        "active" => "blog",
        "post" => $new_post
    ]);
});
