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
    return view('posts' , ['title' => 'Blog', 'posts' => Post::all()]);
});

Route::get('/posts/{slug}', function ($slug) {
   
         $post = Arr::first(Post::all(), function($post) use ($slug) {
            return $post['slug'] == $slug;
         });
        return view('post', ['title' => 'single post', 'post' => $post]);
}); 

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
