<?php

namespace App\Models;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class Post extends Model
{

    use HasFactory;
    protected $fillable = ['title', 'author', 'slug', 'body'];



    protected $with = ['author', 'category']; //tambahkan ini di model untuk membuat eager loading dgn cepat


// function ini digunakan untuk agar author dapat mengambil atau relasi dengan 
// tabel user jadi author atau disini table post dapat mengambil
// data dari tabel user Atau ONE To Many
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
//arti dari belong to adalah satu post punya satu kategory 
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeFilter(Builder $query, array $filters):void
    {
        // if(isset($filters['search']) ? $filters['search'] : false )  Ternari Operator
        //if((filters['search'] ?? false)) Null Operator 

        // $query->when($filters['search'] ?? false) fungsi when berfungsi untuk melakukan pencarian secara bertumpuk dan jika kondisi true
       
       
       //sebelum diubah jadi arrow function
        // $query->when($filters['search'] ?? false, function($query, $search){
        //     $query->where('title', 'like', '%' .request('search'). '%');
        // });

        //sesudah diubah menjadi arrow function
        $query->when($filters['search'] ?? false, fn($query, $search) =>
            $query->where('title', 'like', '%' .$search. '%')
        );

        $query->when($filters['category'] ?? false, fn($query, $category) => 
            $query->whereHas('category', fn ($query) => $query->where('slug', $category))
    );
    
        $query->when($filters['author'] ?? false, fn($query, $author) => 
            $query->whereHas('author', fn ($query) => $query->where('username', $author))
    );
    }
}
