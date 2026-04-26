<html>
  <head>
     @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
 <body >
        <nav class="flex items-center justify-between h-24 top-0 p-4 w-full bg-stone-100 border-b static backdrop-blur-2xl border-0 b">
            <img class="h-20 w-24" src="/img/download (25).jfif" alt="">
            <button class="py-2 px-3 border bg-green-900 rounded-md font-sans text-white">
                <a href="/video/add"> Upload Video </a>
            </button>
        </nav>
        <div class="w-full h-[550px] flex relative">
             <img class="w-full h-full relative" src="/img/download (24).jfif" alt="">
             <h1 class="absolute font-serif bottom-80 right-96 text-white text-5xl">Welcome to My video world</h1>
             <h1 class="absolute font-serif bottom-52  right-80 text-white text-5xl">Watch My moments come to life!</h1>
        </div>
        <div class="w-full h-screen bg-stone-50">
<div class="w-full grid grid-cols-3">
  <h1>kjehf u</h1>
     @foreach ($video as $vid )
        <div class=" bg-gray-100 p-5 ">
            {{-- <h1>{{ $vid->title }}</h1> --}}
          <video controls width="320">
          <source src="{{ asset('storage/'.$vid->video_path) }}"  type="video/mp4">
        </video>
            {{-- <a href="{{ asset('storage/'.$vid->video_path) }}" download="{{ asset('storage/'.$vid->video_path) }}">Download </a> --}}
           <div class="flex items-center justify-between">
             <h1>Rating:  {{ $vid->rating }} </h1>
            <h1>Views: {{ $vid->views }} </h1>
           </div>
        </div>
        
        @endforeach
</div>
</div>
</body>
</html>
