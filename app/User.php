<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Auth;
use App\Socialite;

class User extends Authenticatable
{
    use EntrustUserTrait, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     *
     */

    protected $table = 'users';

    protected $fillable = [
        'name', 'email', 'password', 'balance', 'coin', 'actived_code', 'is_activated', 'status', 'facebook_id',
        'thumbnai', 'info', 'active_role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //
    public function course()
    {
        return $this->hasMany('App\Course', 'user_id', 'id');
    }

    public function comment()
    {
        return $this->hasMany('App\QuestionComment', 'user_id', 'id');
    }


    public function test()
    {
        return $this->hasMany('App\Test', 'user_id', 'id');
    }

    public function batch()
    {
        return $this->hasMany('App\Batch', 'user_id', 'id');
    }

    public function book()
    {
        return $this->belongsToMany('App\Book', 'user_love', 'user_id', 'book_id');
    }

    public function order()
    {
        return $this->hasMany('App\Order', 'user_id', 'id');
    }

    public function userBatch()
    {
        return $this->belongsToMany('App\Batch', 'user_batch', 'user_id', 'batch_id')
            ->withPivot('id', 'date', 'count', 'average_score', 'secret_key', 'batch_id');
    }

    public function userCourse()
    {
            return $this->belongsToMany('App\Course', 'user_course', 'user_id', 'course_id');
    }

    public function profile()
    {
        return $this->hasOne('App\Profile', 'users_id');
    }

    public function keyBatch()
    {
        return $this->belongsToMany('App\key_batch', 'user_keys', 'user_id', 'key_id')->withPivot('id', 'count_practical', 'expiry_time');
    }

    public function exam()
    {
        return $this->belongsToMany('App\Test', 'user_test', 'user_id', 'test_id')->withPivot('score', 'key', 'access');
    }

    public function room()
    {
        return $this->belongsToMany('App\Room', 'room_user', 'user_id', 'room_id')->withPivot('test_id')->wherePivot('status','!=',0)->where('end_time', '>', date("Y-m-d H:i:s"));
    }
  

}
