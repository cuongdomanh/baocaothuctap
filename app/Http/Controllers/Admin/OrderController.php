<?php

namespace App\Http\Controllers\Admin;

use App\OrderDetail;
use App\Room;
use App\room_user;
use App\user_batch;
use App\user_batch_test;
use App\user_course;
use App\user_course_test;
use App\user_keys;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use Mail;
use App\User;
use App\Book;
use App\Batch;
use App\Course;
use Illuminate\Support\Facades\Auth;
use Session;
use DB;


class OrderController extends Controller
{
    public function all(Request $request,$myorder=null)
    {

        $list = Order::where('is_deleted', false)->where('type', 'all');
        if ($request->has('keyword')) {                              
            $keyword = $request->get('keyword');
            $list    = $list->where('receive_name', 'like', "%$keyword%");
        }
        $list = $list->orderBy('id', 'DESC')->paginate(10);
        if(isset($myorder) && $myorder=="myorder") {
            return view('admin.myorder.all', ['list' => $list])
                ->with('i', ($request->input('page', 1) - 1) * 5);
        }else{
            return view('admin.order.all', ['list' => $list])
                ->with('i', ($request->input('page', 1) - 1) * 5);
        }
    }
    public function book(Request $request)
    {

        $list = Order::where('is_deleted', false)->where('type', 'book');
        if ($request->has('keyword')) {
            $keyword = $request->get('keyword');
            $list    = $list->where('receive_name', 'like', "%$keyword%");
        }
        $list = $list->orderBy('id', 'DESC')->paginate(10);

        return view('admin.order.book', ['list' => $list])
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function course(Request $request , $myorder=null)
    {
        $list = Order::where('is_deleted', false)->where('type', 'course');
        if ($request->has('keyword')) {
            $keyword = $request->get('keyword');
            $list    = $list->where('receive_name', 'like', "%$keyword%");
        }
        $list = $list->orderBy('id', 'DESC')->paginate(5);
         //nhược điểm của manytomany trong laravel là lâu hơn câu lệnh thường khi join ; 
        if(isset($myorder) && $myorder=="myorder"){
            return view('admin.myorder.course', ['list' => $list])
                ->with('i', ($request->input('page', 1) - 1) * 5);
        }
        else {
            return view('admin.order.course', ['list' => $list])
                ->with('i', ($request->input('page', 1) - 1) * 5);
        }
    }
    public function batch(Request $request ,$myorder=null)
    {

        $list = Order::where('is_deleted', false)->where('type', 'batch');
        if ($request->has('keyword')) {
            $keyword = $request->get('keyword');
            $list    = $list->where('receive_name', 'like', "%$keyword%");
        }
        $list = $list->orderBy('id', 'DESC')->paginate(5);
        if(isset($myorder) && $myorder=="myorder") {
            return view('admin.myorder.batch', ['list' => $list])
                ->with('i', ($request->input('page', 1) - 1) * 5);
        }
        else{
            return view('admin.order.batch', ['list' => $list])
                ->with('i', ($request->input('page', 1) - 1) * 5); 
        }
    }
    public function room(Request $request,$myorder=null)
    {
        $list = Order::where('is_deleted', false)->where('type', 'room');
        if ($request->has('keyword')) {
            $keyword = $request->get('keyword');
            $list    = $list->where('receive_name', 'like', "%$keyword%");
        }
        $list = $list->orderBy('id', 'DESC')->paginate(5);
        if(isset($myorder) && $myorder=="myorder") {
            return view('admin.myorder.room', ['list' => $list])
                ->with('i', ($request->input('page', 1) - 1) * 5);
        }
        else{
            return view('admin.order.room', ['list' => $list])
                ->with('i', ($request->input('page', 1) - 1) * 5);
        }
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * <<<<<<< 254ccf05394df068a9c3b1420fa12907b83d5d60
     * @param  \Illuminate\Http\Request $request
    =======
     * @param  \Illuminate\Http\Request $request
     *
     * >>>>>>> update
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //

    }

    /**
     * Display the specified resource.
     *
     * <<<<<<< 254ccf05394df068a9c3b1420fa12907b83d5d60
     * @param  int $id
    =======
     * @param  int $id
     *
     * >>>>>>> update
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order       = Order::findOrFail($id);
        $orderdetail = OrderDetail::where('order_id', $id)->get();

        return view('admin.order.show', compact('order', 'orderdetail'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user_id = User::where('is_deleted', false)->get();
        $order   = Order::where('is_deleted', '0')->where('id', $id)->first();
        
        return view('admin.order.edit', ['user_id' => $user_id, 'order' => $order]);
    }
    public function update(Request $request, $id)
    {

        $ktqty  = 0;// tao bien kiem tra quanty;
        $order  = Order::findOrFail($id);
        $status = $order->status;
        if ($status == 2 && $request->status != 2) {

            foreach ($order->orderdetail as $item) {
                if ($item->book_id != 0) {
                    $book = Book::where('is_deleted', false)->where('id', $item->book_id)->first();
                    $book->quantity += $item->number;
                    $book->update();
                }
                if($item->room_id != 0){
                    $room=room_user::where('user_id',$order->user_id)->where('room_id',$item->room_id)->first();
                    if(isset($room)){
                        $room->status=0;
                        $room->update();
                    }
                }
                //
                if ($item->course_id != 0) {
                    $usercourse=user_course::where('is_deleted',false)
                                            ->where('course_id', $item->course_id)
                                            ->where('user_id',$order->user_id)
                                            ->first();
                    if(!empty($usercourse)){
                        $id=$usercourse->course_id;
                        $course=Course::where('is_deleted',false)->where('id',$id)->first();
                        foreach($course->batch as $batchItem){
                            $userbatch=user_batch::where('is_deleted',false)->where('batch_id',$batchItem->id)
                                                   ->where('user_id',$order->user_id)->first();
                            if(isset($userbatch)) {
                                $userbTest=user_batch_test::where('is_deleted',false)
                                    ->where('user_batch_test_id',$userbatch->id)->get();
                                if(isset($userbTest[0])){
                                    foreach($userbTest as $item1){
                                        $item1->delete();
                                    }
                                }
                                $userbatch->delete();

                            }

                        }
                        $usercourse->delete();
                    }
                }
                if($item->batch_id!=0){
                    $batch=Batch::where('is_deleted',false)->where('id',$item->batch_id)->first();
                    $userbatch=user_batch::where('is_deleted',false)
                                          ->where('batch_id',$item->batch_id)
                                          ->where('user_id',$order->user_id)->first();
                    if(isset($userbatch)) {
                        $userbTest=user_batch_test::where('is_deleted',false)
                                                   ->where('user_batch_test_id',$userbatch->id)->get();
                        if(isset($userbTest[0])){
                            foreach($userbTest as $item){
                                $item->delete();
                            }
                        }
                        $userbatch->delete();

                    }

                }
            }
        }
        if ($request->status == 2 && $status != 2) {
            $data['encode']=null;
            foreach ($order->orderdetail as $item) {
                if ($item->book_id != 0) {
                    $book = Book::where('is_deleted', false)->where('id', $item->book_id)->first();
                    $book->quantity -= $item->number;
                    if ($book->quantity <= $item->number) {
                        $ktqty          = 1;
                        $book->quantity = 0;
                    }
                    $book->update();
                    $data['encode']=$data['encode']."--- bạn đã mua thành công " .$book->title;
                }
                if($item->room_id != 0){
                    $room=room_user::where('user_id',$order->user_id)->where('room_id',$item->room_id)->first();
                    if(isset($room)){
                        $room->status=1;
                        $room->update();
                    }
                }
                if ($item->course_id != 0) {
                    $encode= str_random(8);
                    $userCourse            = new user_course();
                    $userCourse->course_id = $item->course_id;
                    $userCourse->user_id   = $order->user_id;
                    $userCourse->encode   = $encode;
                    $userCourse->date      = date('Y-m-d H:i:s');
                    $userCourse->save();

                    $course = Course::where('is_deleted', false)->where('id', $item->course_id)->first();
                    foreach($course->video as $itemVideo){
                        $userCourseVideo=new user_course_test();
                        $userCourseVideo->user_course_id=$userCourse->id;
                        $userCourseVideo->video_id      = $itemVideo->id;
                        $userCourseVideo->count_practical	      = 10;
                        $userCourseVideo->save();
                    }
                    foreach ($course->batch as $batchItem) {
                        $uBatch=new user_batch();
                        $uBatch->user_id=$order->user_id;
                        $uBatch->batch_id=$batchItem->id;
                        $uBatch->secret_key=$encode;
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
                    $til=$course->title;
                    $data['encode']=$data['encode']."_____".$til . ":" .$encode."      " ;
                                    
                }
                if($item->batch_id!=0){
                    $encode=  str_random(8);
                    $batch=Batch::where('is_deleted',false)->where('id',$item->batch_id)->first();
                    $userBatch            = new user_batch();
                    $userBatch->batch_id  = $item->batch_id;
                    $userBatch->user_id   = $order->user_id;
                    $userBatch->date      =  date("Y-m-d H:i:s");
                    $userBatch->secret_key=$encode;
                    $userBatch->save();
                    foreach($batch->test as $item1){
                        $userBatchTest=new user_batch_test();
                        $userBatchTest->user_batch_test_id=$userBatch->id;
                        $userBatchTest->test_id=$item1->id;
                        $userBatchTest->count_practical=$batch->countview;
                        $userBatchTest->save();
                    }
                    $til=$batch->title;
                    $data['encode']=$data['encode']."_____".$til . ":" .$encode."      " ;
                }

            }
            $data['receive_email']=$order->receive_email;
            Mail::send('client.emails.keyCourse',$data , function($message) use ($data){
                $message->to($data['receive_email']);
                $message->subject('Kích hoạt tài khoản');
            });
        }
        $requestData = $request->all();
        $order->update($requestData);

        if ($ktqty == 1) {
            Session::flash('error', 'xin thông báo mặt hàng này đã hết !! ');
        } else {
            Session::flash('success', 'Cập nhật thành công');
        }

        return redirect('admin/order/all');
    }

    public function destroy($id)
    {

        $order             = Order::findOrFail($id);
        $order->is_deleted = 1;
        $order->save();
        Session::flash('success', 'Xóa "' . $order->receive_name . '" thành công');

        return redirect('admin/order/book');
    }

    public function xacnhangiohang(){
        $tongtien=Order::all();
        return view('client.pages.checkout', compact('tongtien'));
    }
}




