<html>
    <head>

    </head>
    <body>
        <div>
<form enctype="multipart/form-data" action="{{ URL('video/insert') }}" method="POST" class="absolute bg-gray-900/50 w-1/6 h-full p-10 rounded-lg flex">
        @csrf
            <input class="p-4 border rounded-md"  type="text"  name="title" placeholder="Enter the singer title" >
            <input class="p-4 border rounded-md" type="text" name="description" id="description"  placeholder="description">
            <input class="p-4 border rounded-md" type="text" name="rating" id="rating" placeholder="rating">
            <input class="p-4 border rounded-md" type="text" name="views" id="views" placeholder="views">
            <input class="p-4 border rounded-md" type="text" name="user_id" id="user_id" placeholder="User Id">
            <input class="p-4 border rounded-md" type="file" name="video_path" id="video_path" placeholder="video_path">
            <button type="submit">Upload</button>
    </form>
    </div>
</body>
</html>