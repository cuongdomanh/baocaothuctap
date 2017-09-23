<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book_author extends Model
{
    protected $table='book_author';
    protected $fillable=['book_id','author_id'];
}


