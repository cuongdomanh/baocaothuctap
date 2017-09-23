<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course_tag extends Model
{
    //
    protected $table='course_tag';
    protected $fillable=['course_id','tag_id'];
}


