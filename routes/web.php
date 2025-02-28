<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/about', function () {
    return view('about', ['nama' => 'Apris Agung48'], ['title' => 'About Page']);
});
Route::get('/home', function () {
    return view('home', ['title' => 'HomePage' ]);
});
Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog Page']);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact US']);
});
