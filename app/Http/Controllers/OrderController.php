<?php

namespace App\Http\Controllers;

use App\Batch;
use App\Book;
use App\Course;
use App\OrderDetail;
use App\Profile;
use App\Order;
use App\User;
use Cart;
use Session;
use Illuminate\Http\Request;
use Auth;

class OrderController extends Controller
{
    function __construct()
    {
        $keyword = '';
        view()->share(['keyword' => $keyword]);
    }

    public function getorder()
    {

        return view('client.pages.cart');
    }

    public function postorder(Request $request)
    {
        $totalAmount = 0;
        $ktCourse = $ktBatch = $ktBook = $ktRoom = 0;
        foreach (Cart::content() as $item) {
            if ($item->options->type == 'course') {
                $ktCourse = 1;
            }
            if ($item->options->type == 'batch') {
                $ktBatch = 1;
            }
            if ($item->options->type == 'book') {
                $ktBook = 1;
            }
            if ($item->options->type == 'room') {
                $ktRoom = 1;
            }
        }
        if (empty(Auth::id())) {
            if (($ktCourse == 1 || $ktBatch == 1 || $ktRoom == 1)) {
                return redirect()->back()->withErrors('khi mua khóa học ban cần phải đăng ký và   đăng nhập ');
            }
        }
        $order = new Order();
        if (Auth::user()) {
            $order->user_id = Auth::user()->id;
            $order->receive_name = Auth::user()->profile->first_name;
            if (!empty(Auth::user()->facebook_id)) {
                $this->validate($request, [
                    'address' => 'required',
                    'phone' => 'required',
                ]);
                $order->receive_phone = $request->phone;
                $order->receive_address = $request->address;
            }
            else {
                $order->receive_phone = Auth::user()->profile->phone;
                $order->receive_address = Auth::user()->profile->address;
            }
            $order->receive_email = Auth::user()->email;
            $order->total_amount = $request->subtotal;

        } else {
            $this->validate($request, [
                'name' => 'required',
                'address' => 'required',
                'phone' => 'required',
                'email' => 'required',
                'date' => 'required',
            ]);
            $order->user_id = 0;
            $order->receive_name = $request->name;
            $order->receive_address = $request->address;
            $order->receive_phone = $request->phone;
            $order->receive_email = $request->email;
            $order->receive_date = $request->receive_date;
        }
        if (($ktCourse == 1 && $ktBook == 1) || ($ktBatch == 1 && $ktBook == 1) || ($ktCourse == 1 && $ktBatch == 1)
            || ($ktCourse == 1 && $ktRoom == 1) || ($ktBatch == 1 && $ktRoom == 1) || ($ktBook == 1 && $ktRoom == 1)
        ) {
            $order->type = 'all';
        } else {

            if ($item->options->type == 'book') {
                $order->type = 'book';
            } elseif ($item->options->type == 'course') {
                $order->type = 'course';
            } elseif ($item->options->type == 'batch') {
                $order->type = 'batch';
            } else {
                $order->type = 'room';
            }
        }
        $order->status = 0;
        $order->save();
        foreach (Cart::content() as $it) {
            $orderDetail = new OrderDetail();
            $orderDetail->order_id = $order->id;
            if ($it->options->type == 'book') {
                $orderDetail->book_id = $it->id;
                $orderDetail->number = $it->qty;
            } else {
                $orderDetail->book_id = 0;
            }
            if ($it->options->type == 'course') {
                $orderDetail->course_id = $it->id;
            } else {
                $orderDetail->course_id = 0;
            }
            if ($it->options->type == 'batch') {
                $orderDetail->batch_id = $it->id;
            } else {
                $orderDetail->batch_id = 0;
            }
            if ($it->options->type == 'room') {
                $orderDetail->room_id = $it->id;
            } else {
                $orderDetail->room_id = 0;
            }
            $orderDetail->save();
        }

        return redirect('checkout/' . $order->id);

    }

    public function checkout($id)
    {
        $list = Order::where('is_deleted', false)->where('id', $id)->first();

        return view('client.pages.checkout', ['list' => $list]);
    }

    public function deletecheckout($id)
    {
        $order = Order::findOrFail($id);
        $order->status = 4; //NEU KHACH HANG HUY DON HANG CHUYEN TABLE ORDER STATUS SANG 3
        $order->save();
        Cart::destroy();
        return redirect('/cart');
    }

}









