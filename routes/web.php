<?php


use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// }); 



Route::get('/about', function () {
    return view('about', ['nama' => 'Apris Agung48'], ['title' => 'About Page']);
});
Route::get('/', function () {
    return view('home', ['title' => 'HomePage' ]);
});
Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => Post::all()]);
});
route::get('/posts/{post:slug}', function (Post $post){ //Post disini adalah nama model kita
    // dd($id); //dd digunakan untuk debug atau var_dump 
        return view ('post',['title' => 'Single Post', 'post'=>$post]);
}); 
route::get('/authors/{user:username}', function (User $user){ //Post disini adalah nama model kita
    // dd($id); //dd digunakan untuk debug atau var_dump 
        return view ('posts',['title' => count($user->posts) . ' Artikel By : ' . $user->name, 'posts'=>
        $user->posts]);
}); 
route::get('/categories/{category:slug}', function (Category $category){ //Post disini adalah nama model kita
    // dd($id); //dd digunakan untuk debug atau var_dump 
        return view ('posts',['title' => ' Artikel By Category : ' . $category->name, 'posts'=>
        $category->posts]);
}); 
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact US']);
});
