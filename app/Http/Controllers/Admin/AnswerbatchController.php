<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Answerbatch;
use App\Question;
use Session;


class AnswerbatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request , $id,$idBatchOrRoom)
    {
        $list=Question::where('is_deleted',false)->where('id',$id)->first();
//        $list=$question->answerbatch/;

        return view('admin.answerbatch.list', ['list'=>$list,'idBatchOrRoom'=>$idBatchOrRoom])
                       ->with('i', ($request->input('page', 1) - 1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id=null)
    {
        $question_id=null;
        if(isset($id)){
            $question_id=$id;
        }
        $question = Question::orderBy('id','DESC')->get();


        return view('admin.answerbatch.create', ['question'=>$question,'question_id'=>$question_id]);
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
            'title'     => 'required',
            'sub_score'    => 'required'
        ]);
        $requestData = $request->all();

        Answerbatch::create($requestData);

        Session::flash('success', 'Thêm mới thành công');

        return redirect('admin/answerbatch');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $answerbatch = Answerbatch::where('id', $id)->first();

        return view('admin.answerbatch.show', ['answerbatch'=>$answerbatch] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $answerbatch = Answerbatch::findOrFail($id);
        $question = Question::orderBy('id','DESC')->get();
              
        return view('admin.answerbatch.edit', ['question'=>$question,
                                               'answerbatch'=>$answerbatch]);
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

        $answerbatch = Answerbatch::findOrFail($id);
        $this->validate($request, [
            'title'     => 'required',
            'sub_score'    => 'required'
        ]);

        $requestData = $request->all();
        $answerbatch->update($requestData);

        Session::flash('success', 'Sửa "'.$answerbatch->title.'" thành công');

        return redirect('admin/answerbatch');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $answerbatch = Answerbatch::findOrFail($id);
        $answerbatch->is_deleted=1;
        $answerbatch->save();

        Session::flash('Chúc mừng', 'Xóa "'.$answerbatch->title.'" thành công');
        return redirect()->back();


    }
}




