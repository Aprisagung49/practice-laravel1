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


//query untuk membuat fitur pencarian 
    // $posts = Post::latest();

    // if(request('search')){
    //     $posts->where('title', 'like', '%' .request('search') . '%');
    // }

    // dump(request('search'));    //cara cek apakah data sudah dapat ditangkap kita menggunakan method GET
    //sebelum menggunakan eagel Loading N+1
    // return view('posts', ['title' => 'Blog Page', 'posts' => Post::all()]); 
    //sesudah menggunakan Eagle Loading
    // $Posts = Post::with(['author','category'])->latest()->get();
    //sebelum query disimpan di models
    // return view('posts', ['title' => 'Blog Page', 'posts' => $posts]);   //tambahkan get() diakhir
    //sesudah query disimpan di models
    return view('posts', ['title' => 'Blog Page', 'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->paginate(9)->withQueryString()]);   //tambahkan get() diakhir untuk mengambil data sedangkan untuk pagination ganti jadi paginate ada juga simplePaginate

});
route::get('/posts/{post:slug}', function (Post $post){ //Post disini adalah nama model kita
    // dd($id); //dd digunakan untuk debug atau var_dump 
        return view ('post',['title' => 'Single Post', 'post'=>$post]);
}); 
route::get('/authors/{user:username}', function (User $user){ //Post disini adalah nama model kita
    // dd($id); //dd digunakan untuk debug atau var_dump 
    //sebelum menggunakan eagle loading N+1
        return view ('posts',['title' => count($user->posts) . ' Artikel By : ' . $user->name, 'posts'=>
        $user->posts]);
        //Sesudah memakai eagle loading
        // $posts = $user->posts->load('category','author');
        // return view ('posts',['title' => count($posts) . ' Artikel By : ' . $user->name, 'posts'=>
        // $posts]);
}); 
route::get('/categories/{category:slug}', function (Category $category){ //Post disini adalah nama model kita
    // dd($id); //dd digunakan untuk debug atau var_dump 
    //sebelum menggunakan eager loading
        return view ('posts',['title' => ' Artikel By Category : ' . $category->name, 'posts'=>
        $category->posts]);
        //sesudah menggunakan eagger loading
        // $posts = $category->posts->load('category','author');
        // return view ('posts',['title' => ' Artikel By Category : ' . $category->name, 'posts'=>
        // $posts]);
}); 
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact US']);
});
