<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Answer;
use App\Answerbatch;
use Session;
use App\Formular;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = '';
        if ($request->has('keyword')) {
            $keyword = $request->get('keyword');
            $list    = Answer::where('is_deleted',false)->orderBy('id', 'DESC')
                ->where(function ($query) use ($keyword) {
                    $query->orwhere('title', 'like', "%$keyword%");

                })
                ->paginate(5);
        } else {
            $list = Answer::where('is_deleted',false)->orderBy('answer_batch_id', 'DESC')
                ->paginate(5);
        }

        return view('admin.answer.list', ['list' => $list])
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id=null)
    {
        $anwserBatch_id=null;
        if(isset($id)){
            $anwserBatch_id=$id;
        }
        $answerbatch = Answerbatch::orderBy('id','DESC')->get();

        return view('admin.answer.create', ['answerbatch' => $answerbatch,'anwserBatch_id'=>$anwserBatch_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',

        ]);

        $requestData           = $request->all();
        $requestData['is_correct'] = (isset($request->is_correct)) ? 1 : 0;
        $answer=Answer::create($requestData);
        if ($request->hasFile('images')) {
            $files = $request->file('images');
            foreach ($files as $file) {
                $filename        = $file->getClientOriginalName();
                $name            = md5($filename) . '.' . $file->getClientOriginalExtension();
                $formular        = new Formular();
                $formular->title = $filename;
                $formular->answer_id=$answer->id;
                $formular->image = 'uploads/formular/' . $name;
                $file->move('uploads/formular', $name);
                $formular->save();
            }
        }

        Session::flash('success', 'Thêm mới thành công');

        return redirect('admin/answerbatch');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $answer = Answer::where('id', $id)->first();

        return view('admin.answer.show', ['answer' => $answer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $answer      = Answer::findOrFail($id);
        $answerbatch = Answerbatch::orderBy('id','DESC')->get();
        return view('admin.answer.edit', ['answerbatch' => $answerbatch, 'answer' => $answer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $answer = Answer::findOrFail($id);
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
        ]);

        $requestData = $request->all();
        $answer->update($requestData);

        if ($request->hasFile('images')) {
            foreach($answer->formular as $item){
                unlink($item->image);
                $item->deleted;
            }
            $files = $request->file('images');
            foreach ($files as $file) {
                $filename        = $file->getClientOriginalName();
                $name            = md5($filename) . '.' . $file->getClientOriginalExtension();
                $formular        = new Formular();
                $formular->title = $filename;
                $formular->answer_id=$answer->id;
                $formular->image = 'uploads/formular/' . $name;
                $file->move('uploads/formular', $name);
                $formular->save();
            }
        }

        Session::flash('success', 'Sửa đổi "' . $answer->title . '" thành công');

        return redirect('admin/answer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $answer = Answer::findOrFail($id);
        $answer->is_deleted=1;
        $answer->save();
        Session::flash('success', 'Xóa "'.$answer->title.'" thành công');
        return redirect('/admin/answer');
    }
}




