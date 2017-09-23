<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book_comment extends Model
{
    protected $table='book_comments';
    protected $fillable=['book_id', 'email', 'content',	'comment_id', 'status'];

    public function book()
    {
        return $this->belongsTo('App\Book', 'book_id', 'id');
    }
}





