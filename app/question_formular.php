<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question_formular extends Model
{
    protected $table='question_formular';
    protected $fillable=['formular_id','	question_id','	status','	created_at	','updated_at	','is_deleted'];
}


