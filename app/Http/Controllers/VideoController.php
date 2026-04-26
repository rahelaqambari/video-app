<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{

 public function index(){
       $video =  Video::all();
       return view('Video.home',compact('video'));
    }

    // public function show(string $id){
          
    // }

    public function create(Request $request){
        $video = new Video();
        $filepath = null;
        if($request->hasFile('video_path')){
            $filepath = $request->file('video_path')->store('video','public');
        }
        $video->title = $request->title;
        $video->description = $request->description;
        $video->user_id = $request->user_id;
        $video->views = $request->views;
        $video->user_id = $request->user_id;
        $video->video_path = $filepath;
        $video->save();
        return redirect("/");
        // $request->validate([
        //     'title' => 'required',
        //     'description' => 'nullable|string',
        //      'video_path' => 'required|file|mimes:mp4,mov,avi,|max:51200',
        //     'rating' => 'reqiure|integer|min:2',
        //      'views' => 'required|integer',
        //      'user_id' => 'required|integer',
        // ]);
        // $path = $request->file('video')->store('video','public');

        // Video::create([
        //     'title' => $request->title,
        //     'description' => $request->description,
        //     'views' => $request->views,
        //     'rating' => $request-> rating,
        //     'video_path' => $path,
        //     'user_id' => $request -> user_id,
        //     // 'user_id' => auth()->id(),
        // ]);
        // return 
        // response()->json('data inserted');
    }
}
