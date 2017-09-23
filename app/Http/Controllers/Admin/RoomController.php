<?php

namespace App\Http\Controllers\Admin;
use Auth;
use App\Helpers\Helper;
use App\room_test;
use App\Test;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Room;
use App\Category;
use Session;
class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(Auth::user()->hasRole('admin')){
            $list=Room::where('is_deleted',false);
        }
        else {
            $list=Room::where('is_deleted',false)->where('user_id',Auth::id());
        }
        $list=Room::where('is_deleted',false);
        if($request->has('keyword')){
            $keyword=$request->get('keyword');
            $list=$list->where(
                function ($query) use($keyword) {
                    $query->orWhere('title', 'like', "%$keyword%")
                          ->orWhere('id', 'like', "%$keyword%");
                }
            );
        }
        $list=$list->orderBy('id','DESC')->paginate(10);

        return view('admin.room.list',['list'=>$list]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::where('is_deleted', false)->where('type',3)->orderBy('id','DESC')->get();
        $test=Test::where('is_deleted',false)->where('status',1)->orderBy('id','DESC')->get();

        return view('admin.room.create',['test'=>$test ,'category'=>$category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'id_room'         =>'required',
           'title'       =>'required',
            'start_time' =>'required',
            'end_time'   =>'required'
        ]);

        $requestData=$request->all();
        $requestData['slug']  = Helper::slug( $request['title'] );
        $requestData['status']= (isset($request['status']))?true:false;

        $room=Room::create($requestData);
        if($request->has('test')){

            foreach ($request->test as $key=>$item) {
                $roomTest          = new room_test();
                $roomTest->room_id = $room->id;
                $roomTest->test_id =$item;

                $roomTest->save();
            }
        }

        Session::flash('success','Create room successfull ');


        return redirect('admin/room');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $room=Room::findOrFail($id);
//        $test=Test::where('is_deleted',false)->where('status','1')->orderBy('id','DESC')->get();
//        $roomTest=room_test::where('room_id',$id)->get();
//        $roomT=null;
        $category = Category::where('is_deleted', false)->where('type',3)->orderBy('id','DESC')->get();

//        foreach($roomTest as $item){
//            $roomT[$item->test_id]=$item->test_id;
//        }
        return view('admin.room.edit',['room'=>$room,
//            'roomTest'=>$roomT,'test'=>$test , 
            'category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'id_room'         =>'required',
            'title'      =>'required'
        ]);
        $room=Room::findOrFail($id);

        $requestData=$request->all();
        $requestData['slug']=Helper::slug($request['title']);
        $requestData['start_time']=(!empty($request['start_time'])) ? $request['start_time'] : $room->start_time;
        $requestData['end_time']=(!empty($request['end_time'])) ? $request['end_time'] : $room->end_time;

        $room->update($requestData);


//        $roomTest=room_test::where('room_id',$room->id)->get();
//        foreach ($roomTest as $item){
//            $item->delete();
//        }
//        if($request->has('test')){
//            foreach ($request->test as $key=>$item) {
//                $roomTest=new room_test();
//                $roomTest->room_id  = $id;
//                $roomTest->test_id = $item;
//                $roomTest->save();
//            }
//        }
        Session::flash('success', 'update room successfull');


        return redirect('admin/room');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $room=Room::findOrFail($id);
        $room->is_deleted=1;
        $room->save();
        Session::flash('success', 'Xóa thành công');

        return redirect('admin/room');
    }
}







