<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>

    <h3>Blog Spot</h3>
    <article class ="py-8 max-w-screen-md">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{$post['title']}}
        </h2>
        <div class="text-base text-gray-500">
             <a href="#">{{$post->author->name}} </a> | {{$post->created_at->diffForHumans()}} {{-- diffForHumans() digunakan untuk format 1 minutes ago --}}
        </div>
        <p class="my-4 font-light">{{ $post['body']}}     {{-- Str::limit() digunakan untuk membatasi Jumlah Karakter --}}
        </p>
        <a href="/posts" class="text-medium text-blue-900 hover:underline">&laquo; Back To Post </a> {{-- &laquo; digunakan untuk menampilkan simbol << --}}
    </article>

</x-layout>