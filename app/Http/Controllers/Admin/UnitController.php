<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Unit;
use Session;
use Helper;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $list = Unit::where('is_deleted', '0');
        if($request->has('keyword')) {
            $keyword = $request->get('keyword');
            $list = $list->where('title','like',"%$keyword%");
        }
        $list = $list->orderBy('id', 'DESC')->paginate(10);

        return view('admin.unit.list', ['list' => $list])
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }






    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.unit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'         => 'required|unique:categories,title',
            
        ]);
        $unit = new Unit;
        $unit->title = $request->title;
        $unit->slug = Helper::slug( $request->title );
        $unit->status = $request->status;
        $unit->save(); 
        Session::flash('success', 'Thêm mới thành công');

        return redirect('admin/unit');
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
        $unit = Unit::findOrFail($id);

        return view('admin.unit.edit', ['unit'=>$unit] );
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
        $unit = Unit::findOrFail($id);
        $this->validate($request, [
            'title'         => 'required',
            
        ]);
        
        $unit->title = $request->title;
        $unit->slug = Helper::slug( $request->title );
        $unit->status = $request->status;
        $unit->save(); 
        Session::flash('success', 'Cập nhật "'.$unit->title.'"  thành công');

        return redirect('admin/unit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $unit = Unit::findOrFail($id);
        $unit->is_deleted = 1;
        $unit->save();
        Session::flash('success', 'Xóa "'.$unit->title.'"  thành công');

        return redirect('admin/unit');
    }
}





