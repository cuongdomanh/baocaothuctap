<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_batch extends Model
{
    protected $table = 'user_batch';
    protected $fillable = ['user_id', '	batch_id', 'average_score', 'date', 'count', 'secret_key', 'status', 'created_at', 'updated_at', 'is_deleted'];

    public function userBatchTest()
    {
        return $this->hasMany('App\user_batch_test', 'user_batch_test_id');
    }
    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }
    
}




