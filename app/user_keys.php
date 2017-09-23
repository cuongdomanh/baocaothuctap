<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_keys extends Model
{

    protected $table='user_keys';
    protected $fillable=['count_practical','expiry_time'];

}




