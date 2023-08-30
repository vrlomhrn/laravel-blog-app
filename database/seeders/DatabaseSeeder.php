<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Virlo Mahrian',
            'username' => 'virlomahrian',
            'email' => 'kyoshikage04@gmail.com',
            'password' => bcrypt('password')
        ]);

        User::factory(6)->create();

        Category::create([
            'name' => 'Web Development',
            'slug' => 'web-development'
        ]);

        Category::create([
            'name' => 'Devops',
            'slug' => 'dev-ops'
        ]);

        Category::create([
            'name' => 'Internet Of Things',
            'slug' => 'internet-of-things'
        ]);

        Category::create([
            'name' => 'Mobile App Development',
            'slug' => 'mobile-app-development'
        ]);

        Category::create([
            'name' => 'Software Development',
            'slug' => 'software-development'
        ]);

        Category::create([
            'name' => 'Object Oriented Programming',
            'slug' => 'object-oriented-programming'
        ]);

        Post::factory(25)->create();
    }
}
