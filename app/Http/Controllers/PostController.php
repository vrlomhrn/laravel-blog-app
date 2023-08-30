<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        $title = '';
        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }
        if(request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' in ' . $author->name;
        }
        return view('blog/index', [
            'titlePage' => 'All posts ' . $title,
            'active' => 'posts',
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(10)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('blog/post-details', [
            'titlePage' => 'Post',
            'active' => 'posts',
            'post' => $post
        ]);
    }
}
