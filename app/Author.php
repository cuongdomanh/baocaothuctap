<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'authors';
    protected $fillable=['name', 'slug', 'status'];
    public function book(){
        return $this->belongsToMany('App\Book','book_author','author_id','book_id');
    }

}
