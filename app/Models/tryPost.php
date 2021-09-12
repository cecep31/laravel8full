<?php

namespace App\Models;


class Post
{
    private static $blog_post = [
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

    public static function all(){

        return collect(self::$blog_post);
    }
    public static function find($slug){
        $data = static::all();
        // foreach ($data as $key) {
        //     if ($key["slug"] === $slug) {
        //         $new_post = $key;
        //     }
        // }
        return $data->firstWhere("slug",$slug);
    }
}
