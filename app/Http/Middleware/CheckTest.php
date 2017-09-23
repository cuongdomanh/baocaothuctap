<?php

namespace App\Http\Middleware;

use App\Batch;
use App\room_user;
use App\user_batch;
use App\user_batch_test;
use Closure;
use Auth;
use Illuminate\Contracts\Auth\Guard;

class CheckTest
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

        list($idBatch,$batchOrRoom)=explode("-",$request->batch_id);
        $idTest = $request->id;
        if($batchOrRoom=='b') {
            $batch=Batch::where('is_deleted',false)->where('id',$idBatch)->first();
            if(isset($batch)) {
                if ($batch->status == 0) {

                    $userBatch = user_batch::where('is_deleted', false)->where('user_id', Auth::id())->where('batch_id', $idBatch)->first();
                    if (isset($userBatch)) {

                        $userBatchTest = user_batch_test::where('is_deleted', false)
                            ->where('user_batch_test_id', $userBatch->id)
                            ->where('test_id', $idTest)
                            ->first();

                    }
                    if (isset($userBatchTest) && $userBatchTest->count_practical > 0) {
                        $userBatchTest->count_practical -= 1;
                        $userBatchTest->update();
                        return $next($request);
                    } else {
                        return redirect()->back()
                            ->withErrors(['bạn đã hết quyền truy cập vào phần nội dung bài test này ! ']);;
                    }
                }
                // doi voi tep de free
                if ($batch->status == 1) {
                    return $next($request);
                }
            }else{
                return redirect()->back()
                    ->withErrors(['bạn đã hết quyền truy cập vào phần nội dung bài test này ! ']);;
            }
        }
        if($batchOrRoom=='r'){
            $roomUser=room_user::where('is_deleted',false)->where('room_id',$idBatch)->where('user_id',Auth::id())->where('test_id',$idTest)->first();
            if(isset($roomUser)){
                if($roomUser->status==1){
                    $roomUser->status=0;
                    $roomUser->update();

                    return $next($request);
                }
                elseif($roomUser->status==2){
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
        else {
            return redirect()->back()
                ->withErrors(['bạn đã hết quyền truy cập vào phần nội dung bài test này ! ']);;
        }
    }
}
