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

    public function tech() {
        $posts = [
        [
            'title' => 'How AI Is Changing Everyday Software',
            'date' => 'September 18, 2026',
            'author' => 'Alex Morgan',
            'body' => 'Smaller AI models are bringing useful writing, search, and accessibility tools directly into the apps people already use.',
        ],
        [
            'title' => 'The Web Platform Keeps Getting Faster',
            'date' => 'September 24, 2026',
            'author' => 'Jamie Lee',
            'body' => 'Modern browsers continue to improve performance and built-in capabilities, helping developers create responsive experiences with less code.',
        ],
        ];
        include __DIR__ . '/../../views/tech.php';
    }
}