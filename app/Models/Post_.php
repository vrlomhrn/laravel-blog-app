<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Apa itu Front-End? Apa itu Back-End?",
            "slug" => "posts-1",
            "author" => "Virlo Mahrian Shaffari",
            "body" => "Front-end adalah developer yang bekerja di depan atau merancang bagian depan yakni UI, dan apapun yang di input kan user ketika tombol di klik atau button di klik. Sedangkan back-end adalah developer yang mengatur bagian belakang atau orang yang mengelola permintaan user ke server dan akan melakukan response dari server ke luar user."
        ],
        [
            "title" => "Coffee membuat orang menjadi efektif? Mari kita cari tahu",
            "slug" => "posts-2",
            "author" => "Zahid Khairu Ghani",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta, id. Provident explicabo expedita nesciunt velit porro cum voluptatibus incidunt ad, quae, cumque doloribus dolorum laborum laboriosam aliquam rerum perferendis! Accusantium!Quia officiis pariatur culpa minima veniam ratione placeat, harum ipsa iusto rem eveniet nobis vel explicabo ut unde rerum magni, laborum quasi quaerat qui. Dignissimos repellat rerum in quaerat facilis."
        ],
        [
            "title" => "Ayok ngoding!",
            "slug" => "posts-3",
            "author" => "Jfa2312",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta, id. Provident explicabo expedita nesciunt velit porro cum voluptatibus incidunt ad, quae, cumque doloribus dolorum laborum laboriosam aliquam rerum perferendis! Accusantium!Quia officiis pariatur culpa minima veniam ratione placeat, harum ipsa iusto rem eveniet nobis vel explicabo ut unde rerum magni, laborum quasi quaerat qui. Dignissimos repellat rerum in quaerat facilis."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
