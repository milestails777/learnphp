<?php

namespace App\Controllers;

use App\DB;
use App\Models\Post;
use App\Models\User;

class PublicController {
    public function index() 
    {
        $posts = Post::all();
        $title = 'World';
        view('index', compact('title', 'posts'));
    }

    public function us() 
    {
        $users = User::all();
        $title = 'World';
        view('us', compact('title', 'users'));
    }

    public function forms() {
        view('forms');
    }

    public function answer(){
        dump($_GET, $_POST);
    }
}