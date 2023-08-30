<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function category(Category $category)
    {
        return view('category/index', [
            'titlePage' => 'All Categories',
            'active' => 'categories',
            'categories' => $category->all()
        ]);
    }
}
