<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = "answer";
    public $timestamps = false;

    protected $fillable = [
        'title', 'content', 'is_correct', 'answer_batch_id'
    ];

    public function answerbatch()
    {
        return $this->belongsTo('App\Answerbatch', 'answer_batch_id', 'id');
    }

    public function formular()
    {
        return $this->hasMany('App\Formular','answer_id', 'id');
    }
}




