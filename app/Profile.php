<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';

    protected $fillable = [
        'users_id',
        'first_name',
        'last_name',
        'dob',
        'address',
        'phone',
        'status',
        'is_deleted',
    ];

    public  function order()
    {
        return $this->hasMany('App\Order', 'order_id', 'id');
    }
    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
}



