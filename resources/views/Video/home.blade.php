<div>
     @foreach ($see as $vid )
        <div>
            <h1>{{ $vid->title }}</h1>
          <video controls width="320">
          <source src="{{ asset('storage/'.$vid->video_path) }}"  type="video/mp4">
        </video>
            <a href="{{ asset('storage/'.$vid->video) }}" download="{{ asset('storage/'.$vid->video) }}">Download </a>
            <h1>{{ $vid->rating }} </h1>
            <h1>{{ $vid->views }} </h1>
        </div>
        
        @endforeach
</div>
