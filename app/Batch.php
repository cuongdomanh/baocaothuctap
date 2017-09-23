<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{

    protected $table = 'batches';

    protected $fillable = [
        'title', 'slug', 'price', 'discount', 'user_id', 'status', 'batch', 'thumbnail', 'categories_id','countview'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }


    public function orderdetail()
    {
        return $this->hasMany('App\OrderDetail', 'batch_id', 'id');
    }

    public function comment()
    {
        return $this->hasMany('App\batch_comment', '	batches_id', 'id');
    }

    public function test()
    {
        return $this->belongsToMany('App\Test', 'batch-test', 'batch_id', 'test_id')->where('is_deleted', false);
    }

    public function course()
    {
        return $this->belongsToMany('App\Course', 'course_batch', 'batch_id', 'course_id')->where('is_deleted', false);
    }

    public function keyBatch()
    {

        return $this->hasOne('App\key_batch', 'batch_id');
    }
}



