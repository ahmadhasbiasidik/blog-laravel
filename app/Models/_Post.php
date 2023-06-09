<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul pertama",
            "slug"=>"judul-pertama",
            "author" => "Hasbi",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur, dolorem placeat similique nihil facilis suscipit, beatae ratione natus possimus voluptate, nemo libero reprehenderit id atque optio ipsam! Accusamus, id aspernatur.",
        ],
        [
            "title" => "Judul kedua",
            "slug"=>"judul-kedua",
            "author" => "Asidik",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur, dolorem placeat similique nihil facilis suscipit, beatae ratione natus possimus voluptate, nemo libero reprehenderit id atque optio ipsam! Accusamus, id aspernatur.",
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug',$slug);
    }
}
