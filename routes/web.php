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

Route::get('/projects', function () {

   
    return view('projects');
});

Route::get('/aboutme', function () {
    return view('aboutme');
});

Route::get('/contact', function () {
    return view('contact');

});