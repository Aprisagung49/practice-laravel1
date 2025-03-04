<?php

namespace App\Models;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{

    use HasFactory;
    protected $fillable = ['title', 'author', 'slug', 'body'];

// function ini digunakan untuk agar author dapat mengambil atau relasi dengan 
// tabel user jadi author atau disini table post dapat mengambil
// data dari tabel user Atau ONE To Many
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
