<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course_video extends Model
{
    protected $table='course_video';
    protected $fillable=['course_id', 'video_id'];


}



