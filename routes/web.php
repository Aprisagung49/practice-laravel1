<?php

use Illuminate\Support\Arr;
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
Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Arikel 1',
            'author' => 'Apris Agung Wiresa',
            'body' => 'Perkembangan era digital juga semakin lama semakin berjalan begitu cepat hingga tak bisa dihentikan oleh manusia. Hal ini tak lain karena kita sebagai manusia sendirilah yang pada akhirnya menuntut dan meminta berbagai macam hal secara lebih efisien serta praktis.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Arikel 2',
            'author' => 'Apris Agung Wiresa',
            'body' => 'Salah satu pihak yang paling menggiatkan transformasi digital adalah industri atau perusahaan. Mengingat pentingnya peran sektor industri dalam pengembangan ekonomi dan teknologi suatu negeri, hal ini tentu dianggap sebagai sesuatu yang wajar dan masuk akal. Transformasi digital untuk perusahaan adalah hal yang tak bisa dielakkan, terutama setelah pengembangan konsep Industri 4.0 yang isunya mulai diangkat sejak satu dekade silam.'
        ]
    ]]);
});
route::get('/posts/{slug}', function ($slug){
    // dd($id); //dd digunakan untuk debug atau var_dump 
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Arikel 1',
            'author' => 'Apris Agung Wiresa',
            'body' => 'Perkembangan era digital juga semakin lama semakin berjalan begitu cepat hingga tak bisa dihentikan oleh manusia. Hal ini tak lain karena kita sebagai manusia sendirilah yang pada akhirnya menuntut dan meminta berbagai macam hal secara lebih efisien serta praktis.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Arikel 2',
            'author' => 'Apris Agung Wiresa',
            'body' => 'Salah satu pihak yang paling menggiatkan transformasi digital adalah industri atau perusahaan. Mengingat pentingnya peran sektor industri dalam pengembangan ekonomi dan teknologi suatu negeri, hal ini tentu dianggap sebagai sesuatu yang wajar dan masuk akal. Transformasi digital untuk perusahaan adalah hal yang tak bisa dielakkan, terutama setelah pengembangan konsep Industri 4.0 yang isunya mulai diangkat sejak satu dekade silam.'
        ]
        ];

        $post = Arr::first($posts, function ($post) use ($slug) {
            return $post['slug'] == $slug;
        });

        return view ('post',['title' => 'Single Post', 'post'=>$post]);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact US']);
});
