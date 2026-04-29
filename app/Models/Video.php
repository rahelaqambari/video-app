<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //
    protected $fillable = [
        'title',
        'description',
        'rating',
        'views',
        'video_path',
        'user_id'
    ];
}
