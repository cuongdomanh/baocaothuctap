<?php

namespace App\Http\Middleware;

use App\Course;
use App\user_course;
use App\user_course_test;
use App\Video;
use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;

class checkVideo
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
        $idVideo=$request->idVideo;
        $course=Course::where('is_deleted',false)->where('id',$idCourse)->first();
        if($course->status==1){
                  $usercourse=user_course::where('is_deleted',false)->where('user_id',Auth::id())
                                            ->where('course_id',$idCourse)->first();
            if(isset($usercourse)) {
                $userVideo = user_course_test::where('is_deleted', false)
                    ->where('user_course_id', $usercourse->id)
                    ->where('video_id', $idVideo)
                    ->first();
                if (isset($userVideo) && $userVideo->count_practical > 0) {
                    $userVideo->count_practical--;
                    $userVideo->update();
                    return $next($request);
                } else {
                    return redirect('/')
                        ->withErrors(['bạn đã hết quyền truy cập vào phần nội dung bài test này ! ']);
                }
            }else{
                return redirect('/')
                    ->withErrors(['bạn đã hết quyền truy cập vào phần nội dung bài test này ! ']);
            }

        }
        return $next($request);
    }
}
