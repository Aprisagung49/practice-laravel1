<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>HOME PAGE</title><picture>
        <source media="(min-width: )" srcset="">
        <img src="" alt="">
    </picture>
    {{-- <script src="js/script.js"></script> --}}
</head>
<body>
    
<!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
<div class="min-h-full">
   <x-navbar></x-navbar>
  
   <x-header>{{$title}}</x-header>

    <main>
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
       {{$slot}}
      </div>
    </main>
  </div>
  

</body>
</html>