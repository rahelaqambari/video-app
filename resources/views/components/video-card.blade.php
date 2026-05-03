 <div class="h-fit w-full bg-black flex flex-col gap-3" >
   @foreach ($videos as $vid )
        <div class=" bg-white rounded-md shadow-2xl border p-4 flex flex-col items-center justify-center ">
            <h1>{{ $vid->title }}</h1>
          <video class=" h-72" controls width="320">
          <source src="{{ asset('storage/'.$vid->video_path) }}"  type="video/mp4">
        </video>
            <a href="{{ asset('storage/'.$vid->video_path) }}" download="{{ asset('storage/'.$vid->video_path) }}">Download </a>
            <div class="flex w-full items-center p-2 justify-between">
               <h1>Rating:  {{ $vid->rating }} </h1>
           <h1>Views: {{ $vid->views }} </h1>
            </div>
           <a href=" {{ URL('video/show', $vid->id) }}">
              <h1 class="text-4xl font-serif text-green-900 bottom-0"> {{ $vid->title}}</h1>
            </a>
        </div>
        
        @endforeach
    </div>