<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public $table = "questions";

    protected $fillable = [
        'title', 'test_id', 'content', 'explain', 'score', 'status'
    ];

    public function answerbatch()
    {
        return $this->hasMany('App\Answerbatch', 'question_id', 'id')->where('is_deleted', false)->orderByRaw("RAND()");
    }

    public function test()
    {
        return $this->belongsTo('App\Test', 'test_id', 'id');
    }

    public function formular()
    {
        return $this->hasMany('App\Formular', 'question_id', 'id');
    }

    public function batchComment()
    {
        return $this->hasMany('App\batch_comment', 'question_id', 'id');
    }
}







