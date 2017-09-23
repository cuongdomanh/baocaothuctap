<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course_comment extends Model
{
    protected $table = 'course_comment';
    protected $fillable = ['name', 'email', 'content', 'parent_id', 'courses_id', 'status', 'is_deleted'];

    public function course()
    {
        return $this->belongsTo('App\Course', 'courses_id', 'id');
    }
}



