<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';
    protected $fillable=['title', 'slug', 'status'];

    public function book(){
        return $this->belongsToMany('App\Book','book_tag','tag_id','book_id');
    }
    public function course(){
        return $this->belongsToMany('App\Course','course_tag','tag_id','course_id');
    }
}



