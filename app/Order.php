<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $table = 'orders';


    protected $fillable = [
        'receive_name',
        'receive_address',
        'receive_phone',
        'receive_email',
        'total_amount',
        'type',
        'tax',
        'discount',
        'note',
        'number',
        'status',
        'user_id',
        'is_deleted',
    ];

    public function orderdetail()
    {
        return $this->hasMany('App\OrderDetail', 'order_id', 'id');
    }

    public function profile()
    {
        return $this->belongsTo('App\Profile', 'order_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    public function course(){
        return $this->belongsToMany('App\Course','order_detail','order_id','course_id');
    }
    public function batch(){
        return $this->belongsToMany('App\Batch','order_detail','order_id','batch_id');
    }
    public function room(){

        return $this->belongsToMany('App\Room','order_detail','order_id','room_id');
    }
}



