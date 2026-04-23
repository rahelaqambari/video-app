<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    //
    public function index(){

    }

    public function show(string $id){

    }

    public function store(Request $request){
        $request->validate([
            'video' => 'required|file|mimes:mp4,mov,avi,|max:51200',
            'title' => 'required',
            'description' => 'nullable|string',
            'views' => 'required|integer',
            'rating' => 'reqiure|integer|min:2'
        ]);
        $path = $request->file('video')->store('video','public');

        Video::create([
            'title' => $request->title,
            'description' => $request->description,
            'views' => $request->views,
            'rating' => $request-> rating,
            'video_path' => $path,
            // 'user_id' => auth()->id(),
        ]);
        return 
        response()->json('data inserted');
    }
}
