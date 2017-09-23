<?php

namespace App\Http\Controllers\Admin;

use App\batch_test;
use App\Room;
use App\room_test;
use App\UploadBatch;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Test;
use App\User;
use Helper;
use Session;
use App\Batch;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id = null)
    {
        $id = $id;
        list($id1, $batchOrRoom) = explode("_", $id);
        if ($batchOrRoom == "b") {
            $batch = Batch::where('is_deleted', false)->where('id', $id1)->first();
            $list = $batch->test;
        } elseif ($batchOrRoom == "r") {
            $room = Room::where('is_deleted', false)->where('id', $id1)->first();
            $list = $room->test;
        } else {
            return redirect()->back();
        }


        return view('admin.test.list', compact('list', 'id','batchOrRoom'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $id = $id;
        list($id1, $batchOrRoom) = explode("_", $id);
        $room_id = $room = $batch = $batch_id = null;
        if ($batchOrRoom == 'b') {
            $batch_id = $id1;
            $batch = Batch::where('is_deleted', false)->where('id', '!=', $id1)->orderBy('id','DESC')->get();
        } elseif ($batchOrRoom == 'r') {
            $room_id = $id1;
            $room = Room::where('is_deleted', false)->where('id', '!=', $id1)->orderBy('id','DESC')->get();
        } else {
            return redirect()->back();
        }

        $test = Test::where('is_deleted', false)->orderBy('id','DESC')->get();
        $user = User::where('is_deleted', '0')->where('active_role', 1)->pluck('name', 'id');
//        $batch = Batch::where('is_deleted', false)->get();
//        $room = Room::where('is_deleted', false)->get();
        return view('admin.test.create', ['user' => $user, 'batch' => $batch, 'batch_id' => $batch_id, 'room_id' => $room_id, 'room' => $room, 'test' => $test,'id'=>$id]);
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

        $this->validate($request, [
            'title' => 'required',
            'total_score' => 'required',
        ]);
        $bR=$request->batchOrRoom;
//        list($id1, $batchOrRoom) = explode("_", $bR);
        $requestData = $request->all();
        $requestData['status'] = (isset ($request->status)) ? 1 : 0;
        $requestData['slug'] = Helper::slug($requestData['title']);

        $test = Test::create($requestData);

        if ($request->hasFile('upload_batch')) {
            $files = $request->file('upload_batch');
            foreach ($files as $file) {
                $fileName = $file->getClientOriginalName();
                $name = md5(($fileName) . date('Y-m-d H:i:s')) . '.' . $file->getClientOriginalExtension();
                while (file_exists("uploads/batch_file/" . $name)) {
                    $name = str_random(4) . "_" . $fileName;
                }
                $requestData['name'] = $fileName;
                $requestData['url'] = 'uploads/batch_file/' . $name;
                $requestData['size'] = number_format($file->getSize() / 1024, 1) . ' Kb';
                $requestData['test_id'] = $test->id;
                $file->move(public_path('uploads/batch_file/'), $name);
                UploadBatch::create($requestData);
            }
        }
         if(isset($request->batch_id)){
             $batchTest = new batch_test();
             $batchTest->test_id = $test->id;
             $batchTest->batch_id = $request->batch_id;
             $batchTest->save();
         }

        if ($request->has('batch')) {
            foreach ($request->batch as $key => $item) {
                $batchTest = new batch_test();
                $batchTest->test_id = $test->id;
                $batchTest->batch_id = $item;
                $batchTest->save();
            }
        }
        if(isset($request->room_id)){
            $roomTest = new room_test();
            $roomTest->test_id = $test->id;
            $roomTest->room_id = $request->room_id;
            $roomTest->save();
        }

        if ($request->has('room')) {
            foreach ($request->room as $key => $item) {
                $roomTest = new room_test();
                $roomTest->test_id = $test->id;
                $roomTest->room_id = $item;
                $roomTest->save();
            }
        }

        Session::flash('Chúc mừng!', 'Thêm mới thành công');

            return redirect('admin/test/'.$bR) ;


//        return redirect()->back();
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
    public function edit($id,$bR)
    {
        list($id1, $batchOrRoom) = explode("_", $bR);

        $test = Test::findOrFail($id);
        $user = User::where('is_deleted', '0')->where('active_role', 1)->pluck('name', 'id');
        $room=$batch=$batchT=$roomT=null;
        if($batchOrRoom=='b') {
            $batch = Batch::where('is_deleted', false)->orderBy('id','DESC')->get();
            $batchTest = batch_test::where('test_id', $id)->get();
            $batchT = null;
            foreach ($batchTest as $item) {
                $batchT[$item->batch_id] = $item->batch_id;
            }
        }
        if($batchOrRoom=='r') {
            $room = Room::where('is_deleted', false)->orderBy('id','DESC')->get();
            $roomTest = room_test::where('room_id', $id)->get();
            foreach ($roomTest as $item) {
                $roomT[$item->room_id] = $item->room_id;
            }
        }
        return view('admin.test.edit', ['user' => $user, 'test' => $test, 'batch' => $batch, 'batchTest' => $batchT, 'room' => $room, 'roomTest' => $roomT,'id'=>$bR]);
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
        $test = Test::findOrFail($id);
        $this->validate($request, [
            'title' => 'required',
            'total_score' => 'required'
        ]);
        $requestData = $request->all();
        $requestData['status'] = (isset ($request->status)) ? 1 : 0;
        $requestData['slug'] = Helper::slug($requestData['title']);
        $test->update($requestData);
        $bR=$request->batchOrRoom;
        if ($request->hasFile('upload_batch')) {
            $files = $request->file('upload_batch');
            foreach ($files as $file) {
                $fileName = $file->getClientOriginalName();
                $name = md5(($fileName) . date('Y-m-d H:i:s')) . '.' . $file->getClientOriginalExtension();
                while (file_exists("uploads/batch_file/" . $name)) {
                    $name = str_random(4) . "_" . $fileName;
                }
                $requestData['name'] = $fileName;
                $requestData['url'] = 'uploads/batch_file/' . $name;
                $requestData['size'] = number_format($file->getSize() / 1024, 1) . ' Kb';
                $requestData['test_id'] = $test->id;
                $file->move(public_path('uploads/batch_file/'), $name);
                UploadBatch::create($requestData);
            }
        }

        $batchTest = batch_test::where('test_id', $test->id)->get();
        foreach ($batchTest as $item) {
            $item->delete();
        }
        if ($request->has('batch')) {
            foreach ($request->batch as $key => $item) {
                $batchTest = new batch_test();
                $batchTest->test_id = $id;
                $batchTest->batch_id = $item;
                $batchTest->save();
            }
        }
        $roomTest = room_test::where('test_id', $test->id)->get();
        foreach ($roomTest as $item) {
            $item->delete();
        }
        if ($request->has('room')) {
            foreach ($request->room as $key => $item) {
                $roomTest = new room_test();
                $roomTest->test_id = $id;
                $roomTest->room_id = $item;
                $roomTest->save();
            }
        }
        Session::flash('Chúc mừng!', 'Sửa đổi "' . $test->title . '" thành công');

        return redirect('admin/test/'.$bR);
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
        $test = Test::findOrFail($id);
        $test->is_deleted = 1;
        $test->save();

        Session::flash('Chúc mừng!', 'Xóa "' . $test->title . '" thành công');

        return redirect()->back();
    }

    public function deletefile(Request $request, $id)
    {
        $file = UploadBatch::findOrFail($id);
//        unlink('uploads/batch_file/' . $file->name);
        $file->is_deleted = 1;
        $file->save();

        Session::flash('success', 'Xóa file thành công');
        return redirect()->back();
    }
    


}








