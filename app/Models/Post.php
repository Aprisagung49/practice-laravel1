<?php

namespace App\Models;
use Illuminate\Support\Arr;

class Post{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'perkembangan-era-digitalisasi',
                'title' => 'Perkembangan Era Digitalisasi',
                'author' => 'Apris Agung Wiresa',
                'body' => 'Perkembangan era digital juga semakin lama semakin berjalan begitu cepat hingga tak bisa dihentikan oleh manusia. Hal ini tak lain karena kita sebagai manusia sendirilah yang pada akhirnya menuntut dan meminta berbagai macam hal secara lebih efisien serta praktis.'
            ],
            [
                'id' => 2,
                'slug' => 'Era-Digital-40',
                'title' => 'Digitalisasi 4.0',
                'author' => 'Apris Agung Wiresa',
                'body' => 'Salah satu pihak yang paling menggiatkan transformasi digital adalah industri atau perusahaan. Mengingat pentingnya peran sektor industri dalam pengembangan ekonomi dan teknologi suatu negeri, hal ini tentu dianggap sebagai sesuatu yang wajar dan masuk akal. Transformasi digital untuk perusahaan adalah hal yang tak bisa dielakkan, terutama setelah pengembangan konsep Industri 4.0 yang isunya mulai diangkat sejak satu dekade silam.'
            ]
            ];
    }
    public static function find($slug)
    {
        // return Arr::first(static::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });
        return Arr::first(static::all(), fn ($post) => $post['slug'] == $slug); //arrow function dibuat ringkas
     
    }
}
?>