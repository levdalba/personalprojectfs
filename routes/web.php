<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $articles = [
        [
            'title' => 'Sample Article',
            'content' => 'This is a sample article.',
            'author' => 'John Doe'
        ],
        [
            'title' => 'Another Article',
            'content' => 'This is another article.',
            'author' => 'Jane Doe'
        ]
    ];
    return view('welcome', ['articles' => $articles]);

});

Route::get('/articles', function () {
    $articles = [
        [
            'title' => 'Sample Article',
            'content' => 'This is a sample article.',
            'author' => 'John Doe'
        ],
        [
            'title' => 'Another Article',
            'content' => 'This is another article.',
            'author' => 'Jane Doe'
        ]
    ];

    return view('articles', ['articles' => $articles]);
});