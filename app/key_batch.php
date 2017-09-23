<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class key_batch extends Model
{
    protected $table = 'key_batch';
    protected $fillable = ['status', 'batch_id', 'is_deleted'];

    public function batch()
    {
        return $this->belongsTo('App\Batch', 'batch_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_keys', 'key_id', 'user_id')->withPivot('id','count_practical', 'expiry_time');
    }
}


