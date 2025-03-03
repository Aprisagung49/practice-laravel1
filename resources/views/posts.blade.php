<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>
    @foreach ($posts as $post )
    <h3>Blog Spot</h3>
    <article class ="py-8 max-w-screen-md border-b border-gray-300">
        <a href="/posts/{{$post['slug']}}" class="hover:underline">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{$post['title']}}
        </h2>
    </a>
        <div class="text-base text-gray-500">
            <a href="#">{{$post['author']}} </a> | 21 April 2025
        </div>
        <p class="my-4 font-light">{{ Str::limit($post['body'],190)}}     {{-- Str::limit() digunakan untuk membatasi Jumlah Karakter --}}
        </p>
        <a href="/posts/{{$post['slug']}}" class="text-medium text-blue-900 hover:underline"> Read More &raquo;</a> {{-- &raquo; digunakan untuk menampilkan simbol >> --}}
    </article>
    @endforeach
</x-layout>