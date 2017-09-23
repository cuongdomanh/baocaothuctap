<?php

namespace App\Http\Middleware;

use App\room_user;
use Auth;
use Closure;
use Illuminate\Contracts\Auth\Guard;
class checkTestRoom
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    protected $auth;
    public function __construct( Guard $guard)
    {
        $this->auth=$guard;
    }
    public function handle($request, Closure $next)
    {
        list($idRoom,$batchOrRoom)=explode("-",$request->room_id);
        $idTest=$request->id;
        $roomUser=room_user::where('is_deleted',false)->where('room_id',$idRoom)->where('user_id',Auth::id())->where('test_id',$idTest)->first();
        if(isset($roomUser)){
            if($roomUser->status==1){
                $roomUser->status=0;
                $roomUser->update();

                return $next($request);
            }
            else{
                return redirect()->back()
                    ->withErrors(['bạn đã hết quyền truy cập vào phần nội dung bài test này ! ']);;
            }
        }
        else{
            return redirect()->back()
                ->withErrors(['bạn đã hết quyền truy cập vào phần nội dung bài test này ! ']);;
        }

    }
}
