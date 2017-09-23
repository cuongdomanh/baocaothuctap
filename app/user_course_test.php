<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_course_test extends Model
{
    //
    protected $table = 'user_course_test';
    protected $fillable = ['user_course_id', '	test_id ', '	total_score', '	answer_correct', '	total_question	 ', 'date_practical	', 'count_practical', '	status', '	created_at', '	updated_at', '	is_deleted'];

    public function userCourse()
    {
        return $this->belongsTo('App\user_course', 'user_course_id');
    }

    public function test()
    {
        return $this->belongsTo('App\Test','test_id');

    }
}




