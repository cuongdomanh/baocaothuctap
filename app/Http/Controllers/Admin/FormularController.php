<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Formular;
use Session;

class FormularController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $list = Formular::where('is_deleted', '0');
        if($request->has('keyword')) {
            $keyword = $request->get('keyword');
            $list = $list->where('title','like',"%$keyword%");
        }
        $list = $list->orderBy('id', 'DESC')->paginate(10);

        return view('admin.formular.list', ['list' => $list])
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.formular.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
            [
              'title'   =>'required',
            ]);
        $formular = New Formular;
        $formular->title       = $request->title;
        if($request->hasFile('image')) {
               $file = $request->file('image');
               $lastfile= $file->getClientOriginalExtension();
               if($lastfile !='jpg' && $lastfile !='png' && $lastfile !='jpeg')
               {
                  redirect('admin/formular')
                  ->with('success', 'Ảnh phải có dạng jpg,png,jpeg');
               }
               $name    = $file->getClientOriginalName();
               $image  = str_random(4)."_".$name;

               while (file_exists("uploads/formular/".$image)) {
                 $image = str_random(4)."_".$name;
               }
               $file->move("uploads/formular/",$image);

               $formular->image= $image;
        } else {   
               $formular->image=" ";
        }

        $formular->type     = $request->type;
        $formular->save();
        Session::flash('success', 'Thêm mới thành công');

        return redirect('admin/formular');
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
        $formular = Formular::findOrFail($id);

        return view('admin.formular.edit', ['formular'=>$formular] );
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
        $formular = Formular::findOrFail($id);
        $this->validate($request,
            [
              'title'   =>'required',
            ]);
       
        $formular->title       = $request->title;
        if($request->hasFile('image')) {
               $file = $request->file('image');
               $lastfile= $file->getClientOriginalExtension();
               if($lastfile !='jpg' && $lastfile !='png' && $lastfile !='jpeg')
               {
                  redirect('admin/formular')
                  ->with('success', 'You have not file image is jpg,png,jpeg');
               }
               $name    = $file->getClientOriginalName();
               $image  = str_random(4)."_".$name;

               while (file_exists("uploads/formular/".$image)) {
                 $image = str_random(4)."_".$name;
               }
               unlink("uploads/formular/".$formular->image);
               $file->move("uploads/formular/",$image);

               $formular->image= $image;
       
        }
        $formular->type     = $request->type;
        $formular->save();
        Session::flash('success', 'Cập nhật "'.$formular->title.'"  thành công');

        return redirect('admin/formular');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $formular = Formular::findOrFail($id);
        $formular->is_deleted=1;
        $formular->save();
        Session::flash('success', 'Xóa "'.$formular->title.'"  thành công');

        return redirect('admin/formular');
    }
}




