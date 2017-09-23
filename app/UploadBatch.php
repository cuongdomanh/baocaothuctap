<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UploadBatch extends Model
{
    protected $table = 'upload_batch';
    protected $fillable = ['name', 'url', 'size', 'status', 'video_id', 'test_id', 'is_deleted'];

    public function tests()
    {
        return $this->belongsTo('App\Test', 'test_id', 'id');
    }

    public function video()
    {
        return $this->belongsTo('App\Video', 'video_id', 'id');
    }


}
