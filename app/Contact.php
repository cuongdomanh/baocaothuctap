<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = "contacts";
    protected $fillable = ['name', 'phone', 'title','content','status','created_at','updated_at'];

}
