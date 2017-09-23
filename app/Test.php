<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = "tests";

    protected $fillable = [
        'title', 'slug', 'total_score', 'user_id', 'status', 'work_time',
    ];

    public function question()
    {
        return $this->hasMany('App\Question', 'test_id', 'id')->where('is_deleted',false)->orderByRaw("RAND()");
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function batch()
    {
        return $this->belongsToMany('App\Batch', 'batch-test', 'test_id', 'batch_id');
    }

    public function userBatchTest()
    {
        return $this->hasOne('App\user_batch_test', 'test_id', 'id');
    }

    public function member()
    {
        return $this->belongsToMany('App\User', 'user_test', 'test_id', 'user_id')->withPivot('score', 'key', 'access')->orderBy('score', 'DESC');
    }

    public function room()
    {
        return $this->belongsToMany('App\Room', 'room_test', 'test_id', 'room_id');
    }

    public function manyFile()
    {
        return $this->hasMany('App\UploadBatch', 'test_id', 'id')->where('is_deleted', '0');;
    }

}




