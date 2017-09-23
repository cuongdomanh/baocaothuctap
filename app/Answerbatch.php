<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answerbatch extends Model
{
    protected $table = "answer_batch";
    public $timestamps = false;
    protected $fillable = [
        'title', 'question_id', 'sub_score','status'
    ];

    public function answer() {
            return $this->hasMany('App\Answer', 'answer_batch_id', 'id')->where('is_deleted', false)->orderByRaw("RAND()");

    }


    public function question() {
    	return $this->belongsTo('App\Question', 'question_id', 'id');
    }
}






