<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_score extends Model
{
    protected $table='user_score';
    protected $fillable=['batch_id','room_id','test_id ','user_id','date','score'];

}
