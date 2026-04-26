 <div class="h-screen w-full flex items-center justify-center bg-">
            {{-- <img class="h-full w-full relative" src="/img/download (24).jfif" alt=""> --}}
       <form enctype="multipart/form-data" action="{{ URL('video/insert') }}" method="POST" class="absolute bg-gray-900/50 w-1/6 h-full p-10 rounded-lg flex">
        @csrf
        <input type="text"  name="title" placeholder="Enter the singer title" >
            <input type="text" name="description" id="description"  placeholder="description">
            <input type="text" name="rating" id="rating" placeholder="rating">
            <input type="text" name="views" id="views" placeholder="views">
            <input type="text" name="user_id" id="user_id" placeholder="User Id">
            <input type="file" name="video_path" id="video_path" placeholder="video_path">
            <button type="submit">Upload</button>
    </form>
    </div>