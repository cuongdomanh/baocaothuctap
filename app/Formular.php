<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formular extends Model
{

    protected $table = "formular";
    protected $fillable = ['title ', '	image ', '	type'];
    public $timestamps=false;

    public function answer()
    {
        return $this->belongsTo('App\Answer',  'answer_id','id');
    }
    public function question(){
        return $this->belongsTo('App\Question','question_id','id');
    }
}



