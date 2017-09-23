<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{

    protected $table = "units";

    protected $fillable = [
       'title', 'slug', 'status'
    ];

    public function book()
    {
        return $this->hasMany('App\Book', 'unit_id', 'id');
    }

}




