<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    protected $table = 'images';

    public function book()
    {
        return $this->belongsTo('App\Book', 'book_id', 'id');
    }



    protected $fillable = [
        'book_id',
        'url',
        'type',
        'format',
        'size',
        'name',
        'status',
        'is_deleted',
        'status',
    ];



}



