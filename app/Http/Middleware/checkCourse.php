<?php

namespace App\Http\Middleware;

use App\user_course;
use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;

class checkCourse
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    protected $auth;
    public function __construct(Guard $guard)
    {
        $this->auth=$guard;
    }

    public function handle($request, Closure $next)
    {
     
        $idCourse=$request->idCourse;
        $keyCourse=$request->keyCourse;
        $userCourse=user_course::where('is_deleted',false)
                                 ->whereNull('book_id')
                                 ->where('user_id',Auth::id())
                                 ->where('course_id',$idCourse)
                                 ->first();
        if (isset($userCourse) && $keyCourse==md5($userCourse->encode)) {
                return $next($request);
        }
        else{
                return redirect()->back();
        }
    }
}
