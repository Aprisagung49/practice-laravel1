<?php


use Illuminate\Support\Facades\Route;
use App\Models\Post;

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
    return view('posts', ['title' => 'Blog Page', 'posts' => Post::all()]);
});
route::get('/posts/{slug}', function ($slug){
    // dd($id); //dd digunakan untuk debug atau var_dump 
        $post = Post::find($slug);
        return view ('post',['title' => 'Single Post', 'post'=>$post]);
}); 
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact US']);
});
