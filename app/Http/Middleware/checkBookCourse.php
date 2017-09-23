<?php

namespace App\Http\Middleware;

use App\course_book;
use App\user_course;
use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;

class checkBookCourse
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
        $keyBookCourse=$request->keyBookCourse;
        $userBookCourse=user_course::where('is_deleted',false)
            ->whereNotNull('book_id')
            ->where('user_id',Auth::id())
            ->where('course_id',$idCourse)
            ->first();
        if (isset($userBookCourse) && $keyBookCourse==md5($userBookCourse->encode)) {
            return $next($request);
        }
        else{
            return redirect()->back();
        }
    }
}
