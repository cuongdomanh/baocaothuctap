<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{

    protected $table = 'videos';
    protected $fillable = ['folder_id', 'course_id', 'title', 'slug', 'size', 'type', 'url', 'thumbnail', 'server', 'status','content'];

    public function folder()
    {
        return $this->belongsTo('App\Folder','folder_id');
    }

    // public function course()
    // {

    //     return $this->belongsToMany('App\Course', 'course_video', 'video_id', 'course_id');
    // }
    
    public function course(){
        return $this->belongsTo('App\Course', 'course_id', 'id');
    }

    public function uploadbatch()
    {
        return $this->hasMany('App\UploadBatch', 'video_id', 'id')->where('is_deleted', '0');
    }

}





