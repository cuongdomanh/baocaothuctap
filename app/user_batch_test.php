<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_batch_test extends Model
{
    protected $table = 'user_batch_test';
    protected $fillable = ['user_batch_test_id	 ', 'test_id	 ', 'total_score ', '	answer_correct ', '	total_question ', '	date_practical ', '	count_practical ', '	secret_key ', '	status	 ', 'created_at ', '	updated_at ', '	is_deleted'];

    public function userBatch()
    {
        return $this->belongsTo('App\user_batch','user_batch_test_id','id');
    }
    public function test()
    {
        return $this->belongsTo('App\Test', 'test_id','id');
    }
}




