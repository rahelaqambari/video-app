<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    //
    // public function index(){
    //     try {
    //         $videos = Video::all();
    //         return response()->json($videos);
    //     } catch (\Exception $e) {
    //         return response()->json(['error' => 'Failed to retrieve videos'], 500);
    //     }   

    // }

    // public function show(string $id){
    //     try {
    //         $video = Video::findOrFail($id);
    //         return response()->json($video);
    //     } catch (\Exception $e) {
    //         return response()->json(['error' => 'Video not found'], 404);
    //     }   
    // }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'nullable|string',
             'video_path' => 'required|file|mimes:mp4,mov,avi,|max:51200',
            'rating' => 'reqiure|integer|min:2',
             'views' => 'required|integer',
             'user_id' => 'required|integer',
        ]);
        $path = $request->file('video')->store('video','public');

        Video::create([
            'title' => $request->title,
            'description' => $request->description,
            'views' => $request->views,
            'rating' => $request-> rating,
            'video_path' => $path,
            'user_id' => $request -> user_id,
            // 'user_id' => auth()->id(),
        ]);
        return 
        response()->json('data inserted');
    }
}
