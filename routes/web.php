<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home' , ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Harlan Gilbran', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts' , ['title' => 'Blog', 'posts' => [
        [
            'id' => '1',
            'slug' => 'judul-artikel-1',
            'title' => 'Judul artikel 1',
            'author' => 'Harlan Gilbran',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae ut possimus incidunt itaque porro maiores commodi deserunt sapiente adipisci, nisi dolore molestias facere laudantium ad quos! Deserunt, libero neque? Veritatis!'
        ],
         [
            'id' => '2',
            'slug' => 'judul-artikel-2',
            'title' => 'Judul artikel 2',
            'author' => 'Harlan Gilbran',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste earum ipsam reprehenderit asperiores, a aliquid itaque alias officiis inventore accusamus minus beatae enim molestiae qui odio ullam provident rerum magni.'
        ]
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => '1',
            'slug' => 'judul-artikel-1',
            'title' => 'Judul artikel 1',
            'author' => 'Harlan Gilbran',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae ut possimus incidunt itaque porro maiores commodi deserunt sapiente adipisci, nisi dolore molestias facere laudantium ad quos! Deserunt, libero neque? Veritatis!'
        ],
         [
            'id' => '2',
            'slug' => 'judul-artikel-2',
            'title' => 'Judul artikel 2',
            'author' => 'Harlan Gilbran',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste earum ipsam reprehenderit asperiores, a aliquid itaque alias officiis inventore accusamus minus beatae enim molestiae qui odio ullam provident rerum magni.'
        ]
         ];

         $post = Arr::first($posts, function($post) use ($slug) {
            return $post['slug'] == $slug;
         });
        return view('post', ['title' => 'single post', 'post' => $post]);
}); 

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
