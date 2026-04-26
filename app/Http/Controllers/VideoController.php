<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{

 public function index(){
       $see =  Video::all();
       return view('Video.home',compact('see'));
    }

    public function show(string $id){
          $video = Video::findOrFail($id);

          $video->increment('views');
          $video->increment('rating',2);
          return view('Video.home', compact('video'));
    }

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
        return redirect("video");
    }
}
