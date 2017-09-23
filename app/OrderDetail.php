<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
   
    protected $table = "order_detail";
    protected $fillable = ['book_id', ' order_id', ' course_id', ' batch_id', 'room_id'];

    public function book()
    {
        return $this->belongsTo('App\Book', 'book_id', 'id');
    }

    public function batch()
    {
        return $this->belongsTo('App\Batch', 'batch_id', 'id');
    }

    public function course()
    {

        return $this->belongsTo('App\Course', 'course_id', 'id');
    }

    public function order()
    {
        return $this->belongsTo('App\Order', 'order_id', 'id');
    }
    public function room()
    {
        return $this->belongsTo('App\Room', 'room_id', 'id');
    }
}



