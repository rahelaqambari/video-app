<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VideoVeiws extends Model
{
    //
    protected $fillable = [
        'user_id',
        'video_id'
    ];
}
