<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class batch_comment extends Model
{
    protected $table = 'batch_comments';
    protected $fillable = ['name', 'email', 'content', 'question_id', 'status'];

    public function question()
    {
        return $this->belongsTo('App\Question', 'question_id', 'id');
    }
}



