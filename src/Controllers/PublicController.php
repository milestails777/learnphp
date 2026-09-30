<?php

namespace App\Controllers;

class PublicController {
    public function index() {
        $title = 'World';
        $posts = [
        [
            'title' => 'Some World title 1',
            'date' => 'January 1, 2021',
            'author' => 'Pets',
            'body' => 'Some World body 1',
        ],
        [
            'title' => 'Some World title 1',
            'date' => 'January 1, 2023',
            'author' => 'Sega',
            'body' => 'Some World body 2',
        ],
        [
            'title' => 'Some World title 1',
            'date' => 'January 1, 2024',
            'author' => 'Mario',
            'body' => 'Some World body 3',
        ],
        [
            'title' => 'Some World title 1',
            'date' => 'January 1, 2025',
            'author' => 'Verity',
            'body' => 'Some World body 4',
        ],
        ];
        include __DIR__ . '/../../views/index.php';
    }

    public function us() {
        $posts = [
        [
            'title' => 'Some World title 1',
            'date' => 'January 1, 2021',
            'author' => 'Pets',
            'body' => 'Some World body 1',
        ],
        [
            'title' => 'Some World title 1',
            'date' => 'January 1, 2023',
            'author' => 'Sega',
            'body' => 'Some World body 2',
        ],
        [
            'title' => 'Some World title 1',
            'date' => 'January 1, 2024',
            'author' => 'Mario',
            'body' => 'Some World body 3',
        ],
        [
            'title' => 'Some World title 1',
            'date' => 'January 1, 2025',
            'author' => 'Verity',
            'body' => 'Some World body 4',
        ],
        ];
        include __DIR__ . '/../../views/us.php';
    }
}