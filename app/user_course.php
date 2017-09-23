<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_course extends Model
{
    //
    protected $table = 'user_course';
    protected $fillable = ['user_id ', 'book_id','course_id	', 'average_score	', 'date', '	count', '	created_at	 ', 'updated_at', '	status', '	is_deleted'];
    public function userCourseTest(){
        return $this->hasMany('App\user_course_test','user_course_id','id');
    }
}




