<?php

namespace App\Http\Controllers;

use App\Category;
use App\Room;
use App\room_test;
use App\room_user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Cart;

class RoomController extends Controller
{
    public function index($id=null){
        $room=Room::where('is_deleted',false)->where('end_time','>',date("Y-m-d H:i:s"))->orderBy('id','DESC')->get();
        $roomUser=room_user::where('is_deleted',false)->where('status','!=',0)->get();
        $array=null;
        foreach($roomUser as $item){
            $array[$item->room_id][$item->test_id]=$item->user_id;
        }
        if (isset($id)) {
            $room = Room::where('is_deleted', false)
                ->where('categories_id', $id)
                ->get();
        }

        $category=Category::where('is_deleted',false)->where('parent_id','>',0)->where('type',3)->get();

        return view('client.room.room',['room'=>$room,'array'=>$array,'category'=>$category]);
    }
    
    public function joinTest($idTest,$idRoom){
        if(Auth::id()){
            $room=Room::where('is_deleted',false)->where('id',$idRoom)->first();
            $roomTest=room_test::where('room_id',$idRoom)->where('test_id',$idTest)->first();
            if(isset($roomTest)){
                $roomUser=room_user::where('is_deleted',false)
                                      ->where('room_id',$idRoom)
                                      ->where('user_id',Auth::id())
                                      ->where('test_id',$idTest)->first();

                if(empty($roomUser)){
                    $roomUser=new room_user();
                    $roomUser->user_id=Auth::id();
                    $roomUser->room_id=$idRoom;
                    $roomUser->test_id=$idTest;
                   if($room->status==1) {
                       $roomUser->status = 2;
                       $roomUser->save();
                   }
                   else{
                        $roomUser->status = 0;
                        $roomUser->save();
                        $this->roomCart($idTest,$idRoom);
                   }
                }
                else{

                    if($roomUser->status==0){
                        $this->roomCart($idTest,$idRoom);
                    }
                }

            }
        }
        return redirect()->back();
    }
    public function roomCart($idt,$idr)
    {
        $roomCart = Room::where('is_deleted', 0)
            ->where('id', $idr)->first();
        $kt=0;
        foreach(Cart::content() as $item){
            if($item->id==$idr){
               $kt=1;
                break;
            }
        }
        if($kt==0) {
            Cart::add(['id' => $idr, 'name' => $roomCart->title, 'qty' => 1, 'price' => $roomCart->cost,
                'options' => ['slug' => $roomCart->slug, 'type' => 'room']
            ]);
        }

        return redirect()->back();
    }
}
