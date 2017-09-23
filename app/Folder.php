<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    protected $table='folders';
    protected $fillable=['title', 'slug', 'parent_id', 'status'];
    public function video(){
        return $this->hasMany('App/Video');
    }
}



