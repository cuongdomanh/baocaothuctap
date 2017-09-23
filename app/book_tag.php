<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book_tag extends Model
{
    //
    protected $table='book_tag';
    protected $fillable=['book_id','tag_id'];
}


