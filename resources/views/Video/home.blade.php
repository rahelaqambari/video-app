<div>
     @foreach ($video as $vid )
        <div>
            <h1>{{ $vid->title }}</h1>
          <video controls width="320">
          <source src="{{ asset('storage/'.$vid->video_path) }}"  type="video/mp4">
        </video>
            <a href="{{ asset('storage/'.$vid->description) }}" download="{{ asset('storage/'.$so->video) }}">Download </a>
        </div>
        
        @endforeach
</div>
