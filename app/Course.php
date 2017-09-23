<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    protected $table = "courses";

    protected $fillable = [
        'title', 'description', 'slug', 'content', 'cost', 'thumbnail', 'discount','url_video', 'user_id', 'status','categories_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function orderdetail()
    {
        return $this->hasMany('App\OrderDetail', 'course_id', 'id');
    }

    // public function video()
    // {
    //     return $this->belongsToMany('App\Video', 'course_video', 'course_id', 'video_id');
    // }

    public function video(){

            return $this->hasMany('App\Video', 'course_id', 'id')->where('is_deleted',false);
    }

    public function comment()
    {
        return $this->hasMany('App\course_comment', 'courses_id', 'id');
    }
    public function batch(){
        return $this->belongsToMany('App\Batch','course_batch','course_id','batch_id')->where('is_deleted',false);
    }
    public function tag(){
        return $this->belongsToMany('App\Tag','course_tag','course_id','tag_id');
    }

}



