<?php

namespace App\Http\Controllers;

use App\Batch;
use App\Course;
use App\course_book;
use App\OrderDetail;
use App\Profile;
use App\Room;
use App\Test;
use App\user_batch;
use App\user_batch_test;
use App\user_course;
use App\user_course_test;
use Illuminate\Http\Request;
use App\User;
use App\Book;
use Auth;
use Session;

class MyacountController extends Controller
{

    public function index()
    {
        if (Auth::check()) {
            $user = Auth::user();

            return view('client.user.order', ['user' => $user]);
        }

        return redirect('/');
    }

    public function login()
    {
        return view('client.user.log');
    }

    public function checklogin(Request $request)
    {

        // $email    = $request->email;
        // $password = $request->password;
        $kt = 0;
        if (Auth::check()) {
            if($request->keyBatch){
                $id = $request->idBatch;
                $userbatch=user_batch::where('is_deleted',false)
                    ->where('user_id',Auth::id())
                    ->where('batch_id',$request->idBatch)
                    ->where('secret_key',$request->keyBatch)
                    ->first();
                if (isset($userbatch)) {
                    return redirect('batch/' . $request->idBatch . '/' . md5($request->keyBatch));
                } else {
                    return redirect()->back();
                }

            }
             elseif ($request->keyCourse) {

                $userCourse = user_course::where('is_deleted', false)
                                          ->whereNull('book_id')
                                          ->where('user_id',Auth::id())
                                          ->where('course_id',$request->idCourse)
                                          ->where('encode', $request->keyCourse)
                                          ->first();
                if (isset($userCourse)) {
                    return redirect('usercourse/' . $request->idCourse . '/' . md5($request->keyCourse));
                } else {
                    return redirect()->back();
                }
            }
            elseif ($request->keyBookCourse) {
                $userBookCourse = user_course::where('is_deleted', false)
                    ->whereNotNull('book_id')
                    ->where('user_id',Auth::id())
                    ->where('course_id',$request->idCourse)
                    ->where('encode', $request->keyBookCourse)
                    ->first();
                if (isset($userBookCourse)) {
                    return redirect('userbookcourse/' . $request->idCourse . '/' . md5($request->keyBookCourse));
                } else {
                    return redirect()->back();
                }
            }
            else {
                return redirect()->back();
            }
        }


        if (Auth::attempt(['email' => $request->email,
            'password' => $request->password,
            'is_activated' => 1])
        )
        {
            Session::flash('success', 'Đăng nhập thành công.');

            return redirect('');
        } elseif (['is_activated' => 0]) {
            Session::flash('error', ' Đăng nhập không thành công !!!');
            return redirect('log');
        } else {
            Session::flash('error', 'Đăng nhập không thành công!!!!!!');
            return redirect('log');
        }

    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }


    public function discount()
    {
        $book = Book::where('is_deleted', false)->orderBy('discount', 'DESC')->limit(5)->get();
        $course = Course::where('is_deleted', false)->orderBy('discount', 'DESC')->limit(5)->get();

        return view('client.user.discount', ['book' => $book, 'course' => $course]);
    }

    public function notification()
    {

          $room=Auth::user()->room;
        return view('client.user.notification', ['room' => $room]);
    }

    public function report()
    {
        if (Auth::check()) {
            $list=null;
            $userBatch =user_batch::where('is_deleted',false)->where('user_id',Auth::id())->where('status',0)->get();
            foreach($userBatch as $item){
                $list[]=Batch::where('is_deleted',false)->where('id',$item->batch_id)->first();

            }

            return view('client.user.report', ['list' => $list]);
        }

        return redirect('/');
    }

    public function examCourse()
    {
        if (Auth::check()) {
            $userCourse=\DB::table('users')
                ->join('user_course','users.id','=','user_course.user_id')
                ->join('courses','user_course.course_id','=','courses.id')
                ->where('users.id',Auth::id())
                ->whereNull('user_course.book_id')
                ->get();
            return view('client.user.Course',['userCourse'=>$userCourse]);
        }

        return redirect('/');
    }

    public function coin()
    {

        if (Auth::check()) {
            $user = Auth::user();
            return view('client.user.coin', ['user' => $user]);
        }

        return redirect('/');
    }

    public function updateMenber(Request $request)
    {
        $userId = Auth::id();
        $user = User::findOrFail($userId);

        if ($request->hasFile('thumbnai')) {
            $file = $request->file('thumbnai');
            $name = md5($file->getClientOriginalName() . date('Y-m-d H:i:s')) . '.' . $file->getClientOriginalExtension();
            $user->thumbnai = $name;
            $file->move('uploads/user', $name);
        }

        if ($request->has('password')) {
            $user->password = bcrypt($request->password);
        }

        $user->name = $request->first_name;
        $user->update();

        $profile = Profile::where('is_deleted', false)->where('users_id', $user->id)->first();
        $profile->first_name = $request->first_name;
        $profile->phone = $request->phone;
        $profile->address = $request->address;
        $profile->update();

        return redirect()->back()->with('success', ' ban đã chỉnh sửa thành công ! ');

    }
    public function bookCourse(Request $request){
        if($request->encode){

            $userCourseBook=user_course::where('is_deleted',false)
                                        ->whereNotNull('book_id')
                                         ->where('status',0)
                                         ->where('encode',$request->encode)->first();
            if(isset($userCourseBook)){
                $userCourseBook->user_id=Auth::id();
                $userCourseBook->status=1;
                $userCourseBook->update();
                //
                $course = Course::where('is_deleted', false)->where('id', $userCourseBook->course_id)->first();

                foreach($course->video as $itemVideo){
                    $userCourseVideo=new user_course_test();
                    $userCourseVideo->user_course_id=$userCourseBook->id;
                    $userCourseVideo->video_id      = $itemVideo->id;
                    $userCourseVideo->count_practical	      = 10;
                    $userCourseVideo->save();
                }
                foreach ($course->batch as $batchItem) {
                    $uBatch=new user_batch();
                    $uBatch->user_id=Auth::id();
                    $uBatch->batch_id=$batchItem->id;
                    $uBatch->secret_key="";
                    $uBatch->date=date('Y-m-d H:i:s');
                    $uBatch->status=1;
                    $uBatch->save();
                    if(isset($batchItem->test[0])) {
                        foreach ($batchItem->test as $item1) {
                            $userBatchTest = new user_batch_test();
                            $userBatchTest->user_batch_test_id = $uBatch->id;
                            $userBatchTest->test_id = $item1->id;
                            $userBatchTest->count_practical = $batchItem->countview;
                            $userBatchTest->save();
                        }
                    }

                }
            }

        }
        $userCourse=\DB::table('users')
            ->join('user_course','users.id','=','user_course.user_id')
            ->join('courses','user_course.course_id','=','courses.id')
            ->where('users.id',Auth::id())
            ->whereNotNull('user_course.book_id')
            ->get();
        
        return view('client.user.bookCourse',['userCourse'=>$userCourse]);
    }


}






