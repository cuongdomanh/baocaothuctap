<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_test extends Model
{
    protected $table='user_test';
    protected $fillable=['	user_id	','test_id','score','key','access'];

}
