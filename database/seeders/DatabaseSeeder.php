<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Label;
use Database\Factories\PostFactory;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();
        Post::factory(20)->create();

        // User::create([
        //     'name' => 'pilput',
        //     'email'=> 'pilput31@gmail.com',
        //     'password' => 'password'
        // ]);

        // Post::create([
        //     "title"=>Str::random(15),
        //     "label_id"=>1,
        //     "user_id"=>1,
        //     "slug"=>"slug1",
        //     "body"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem ab velit voluptates animi, officiis excepturi? Iusto est provident repellat a, minima beatae quas alias impedit dolor aspernatur, laborum neque accusamus."
        // ]);
        // Post::create([
        //     "title"=>Str::random(15),
        //     "label_id"=>1,
        //     "user_id"=>1,
        //     "slug"=>"slug2",
        //     "body"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem ab velit voluptates animi, officiis excepturi? Iusto est provident repellat a, minima beatae quas alias impedit dolor aspernatur, laborum neque accusamus."
        // ]);
        // Post::create([
        //     "title"=>Str::random(15),
        //     "label_id"=>2,
        //     "user_id"=>1,
        //     "slug"=>"slug3",
        //     "body"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem ab velit voluptates animi, officiis excepturi? Iusto est provident repellat a, minima beatae quas alias impedit dolor aspernatur, laborum neque accusamus."
        // ]);

        Label::create([
            'name' => 'java',
            'slug' => '1'
        ]);
        Label::create([
            'name' => 'php',
            'slug' => '2'
        ]);
    }
}
