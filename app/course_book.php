<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course_book extends Model
{
    public $table='course_book';
    public $fillable=['book_id','user_id','course_id','encode','status'];
}
