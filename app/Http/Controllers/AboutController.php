<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    public function index()
    {
        return view('about/index', [
            'titlePage' => 'About',
            'active' => 'about',
            'name' => 'Virlo Mahrian Shaffari',
            'title' => 'Software Engineer',
            'image' => 'vrlomhrn.jpg',
            'description' => 'lorem ipsum dolor sit amet. Adispiscing.'
        ]);
    }
}
