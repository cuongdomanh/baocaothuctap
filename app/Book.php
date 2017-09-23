<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';

    protected $fillable = [
        'title',
        'slug',
        'price',
        'discount',
        'description',
        'thumbnail',
        'content',
        'quantity',
        'pages',
        'size',
        'categories_id',
        'publish_date',
        'reprint',
        'unit_id',
        'is_deleted',
        'is_top',
        'is_hot',
        'is_best',
        'status',
    ];

    public function image()
    {
        return $this->hasMany('App\Image', 'book_id', 'id')->where('is_deleted', '0');
    }

    public function category()
    {
        return $this->belongsTo('App\Category', 'categories_id', 'id');
    }

    public function unit()
    {
        return $this->belongsTo('App\Unit', 'unit_id', 'id');
    }

    public function orderdetail()
    {
        return $this->hasMany('App\OrderDetail', 'book_id', 'id');
    }
    public function comment()
    {
        return $this->hasMany('App\book_comment', 'book_id', 'id');
    }

    public function user(){
        return $this->belongsToMany('App\User','user_love','book_id','user_id');
    }
    public function author(){
        return $this->belongsToMany('App\Author','book_author','book_id','author_id');
    }
    public function tag(){
        return $this->belongsToMany('App\Tag','book_tag','book_id','tag_id');
    }
    public function course_book(){
        return $this->hasMany('App\course_book','book_id','id');
    }                                                        
}




