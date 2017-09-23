<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{                                     
    protected $table='rooms';
    protected $fillable=['id_room','title', 'slug','categories_id', 'start_time', 'end_time',	'status','cost','user_id'];
    public function test(){
        return $this->belongsToMany('App\Test','room_test','room_id','test_id')->where('is_deleted',false);
    }
    public function user(){
        return $this->belongsToMany('App\user','room_user','room_id','user_id')->withPivot('test_id');
    }
}





