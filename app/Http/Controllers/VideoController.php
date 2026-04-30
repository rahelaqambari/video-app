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
     public function moreview(){
       $video =  Video::orderBy('views','desc')->get();
       return view('Video.home',compact('video'));
    }

    public function show(string $id){
          $video = Video::findOrFail($id);

          $video->increment('views',1);
          $video->increment('rating',2);
          return view('Video.show', compact('video'));
    }
    // play
      public function play(string $id){
          $video = Video::findOrFail($id);
          $video->increment('rating',2);
          $video->increment('views',1);
          return response()->json([
            'rating' =>$video->rating,
            'views' =>$video->views
          ]);
    }
    // high views
    // public function highviews(){
    //    $vid =  Video::all();
    //    $vid->max('views');
    //    return $vid;
    // }
    

    public function create(Request $request){
        $request->validate([
            'video_path'=> 'required|file|mimes:mp4,mov,avi',
            'title' => 'required',
            'description' => 'required|min:10',
        ]);
        $video = new Video();
        $filepath = null;
        if($request->hasFile('video_path')){
            $filepath = $request->file('video_path')->store('video','public');
        }
        $video->title = $request->title;
        $video->description = $request->description;
        $video->user_id = $request->user_id;
        $video->video_path = $filepath;
        $video->save();
        return redirect("video");
    }
}
