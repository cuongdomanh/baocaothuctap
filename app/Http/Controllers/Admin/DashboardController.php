<?php

namespace App\Http\Controllers\Admin;

use App\Book;
use Carbon\Carbon;
use App\Order;
use App\OrderDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function stastics()
    {
        //tổng số khóa học
        $start = Carbon::now()->startOfMonth();
        $end = Carbon::now()->endOfMonth();
        $total_course = OrderDetail::select('order_detail.course_id')
            ->join('orders', 'order_detail.order_id', '=', 'orders.id')
            ->where('orders.status', '2')
            ->where('course_id', '!=', 0)
            ->where('order_detail.updated_at', '>=', $start)
            ->where('order_detail.updated_at', '<=', $end)
            ->count();

        //tổng số sách
        $amount_book = 0;
        $total_book = OrderDetail::select('order_detail.number')
//            ->where('number',1)
            ->join('orders', 'order_detail.order_id', '=', 'orders.id')
            ->where('orders.status', '2')
            ->where('book_id', '!=', 0)
            ->where('order_detail.updated_at', '>=', $start)
            ->where('order_detail.updated_at', '<=', $end)
            ->sum('order_detail.number');

//        $amount_book += $total_book;

        //tổng tệp đề
        $total_batch = OrderDetail::select('order_detail.batch_id')
            ->join('orders', 'order_detail.order_id', '=', 'orders.id')
            ->where('orders.status', '2')
            ->where('batch_id', '!=', 0)
            ->where('order_detail.updated_at', '>=', $start)
            ->where('order_detail.updated_at', '<=', $end)
            ->count();

        //tổng tệp đề
        $total_room = OrderDetail::select('order_detail.room_id')
            ->join('orders', 'order_detail.order_id', '=', 'orders.id')
            ->where('orders.status', '2')
            ->where('room_id', '!=', 0)
            ->where('order_detail.updated_at', '>=', $start)
            ->where('order_detail.updated_at', '<=', $end)
            ->count();

        //tổng tiền
        $total_amount = DB::table('orders')
            ->where('orders.status', '2')
            ->where('orders.updated_at', '>=', $start)
            ->where('orders.updated_at', '<=', $end)
            ->sum('orders.total_amount');

        //Thong bao het hang
        $check_book = Book::where('books.quantity', '0')
            ->orderBy('books.updated_at','DESC')->get();

        return view('admin.dashboard',
            ['total_course' => $total_course,
                'total_book' => $total_book,
                'total_batch' => $total_batch,
                'total_room' => $total_room,
                'check_book' => $check_book,
                'total_amount' => $total_amount]);
    }

}





