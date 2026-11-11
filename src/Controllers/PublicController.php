<?php

namespace App\Controllers;

use App\DB;
use App\Models\Post;
use App\Models\User;

class PublicController
{
    public function index()
    {
        $posts = Post::all();
        $title = 'World';
        view('index', compact('title', 'posts'));
    }

    public function us()
    {
        $posts = Post::all();
        view('us', compact('posts'));
    }

    public function tech()
    {
        $posts = Post::all();
        $title = 'Technology';
        view('tech', compact('title', 'posts'));
    }

    public function forms()
    {
        view('forms');
    }

    public function answer()
    {
        dump($_GET, $_POST);
    }
}
