<?php

namespace App\Http\Controllers\Admin;

use App\Answerbatch;
use App\Formular;
use App\Answer;
use App\question_formular;
use   \Illuminate\Http\UploadedFile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Question;
use App\Test;
use Session;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id, $idBatchOrRoom = null)
    {
        $id_test = $id;
        $list = Question::where('is_deleted', '0')->where('test_id', $id);
        if ($request->has('keyword')) {
            $keyword = $request->get('keyword');
            $list = $list->where(
                function ($query) use ($keyword) {
                    $query->orwhere('title', 'like', "%$keyword%");
                }
            );
        }
        $list = $list->orderBy('id', 'DESC')->paginate(10);

        return view('admin.question.list',
            ['list' => $list,
                'id_test' => $id_test,
                'idBatchOrRoom' => $idBatchOrRoom])
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id, $idBR)
    {
        
        $numberAnswer = $request->numberAnswer;
        $idBatchOrRoom = $idBR;
        $id_test = $id;

        return view('admin.question.create',
            ['idBatchOrRoom' => $idBatchOrRoom,
                'id_test' => $id_test,
                'numberAnswer' => $numberAnswer]);
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
            'content' => 'required',
            'score' => 'required',
            'sub_score' => 'required'
        ]);
        $question = new Question();
        $requestData = $request->all();
        $question = $question::create($requestData);
        if ($request->hasFile('images')) {
            $files = $request->file('images');
            foreach ($files as $file) {
                $filename = $file->getClientOriginalName();
                $name = md5($filename) . date('Y-m-d H:i:s') . '.' . $file->getClientOriginalExtension();
                $formular = new Formular();
                $formular->title = $filename;
                $formular->question_id = $question->id;
                $formular->image = 'uploads/formular/' . $name;
                $file->move(public_path('uploads/formular'), $name);

                $formular->save();
            }
        }
        $test_id = $request->test_id;
        $idBatchOrRoom = $request->idBatchOrRoom;
       
        foreach ($request->answerbatch as $key => $item) {
            $answerBatch = new Answerbatch();
            $answerBatch->title = $request->answerbatch[$key];
            $answerBatch->question_id = $question->id;
            $answerBatch->status=$request->showQuestion[$key];
            $answerBatch->sub_score = $request->sub_score[$key];
            $answerBatch->save();
            foreach ($request->answer[$key] as $key2 => $item2) {
                $answ = new Answer();
                $answ->content = $request->answer[$key][$key2];
                $answ->is_correct = (isset($request->answerCorrect[$key]) && $key2 == $request->answerCorrect[$key]) ? true : false;
                $answ->answer_batch_id = $answerBatch->id;
                $answ->save();
                if (isset($request->image[$key])) {
                    foreach ($request->image[$key] as $key3 => $item3) {
                        if (isset($request->image[$key][$key2])) {
                            $files = $request->image[$key][$key2];
                            foreach ($files as $file) {
                                $filename = $file->getClientOriginalName();
                                $name = md5(($filename) . date('Y-m-d H:i:s')) . '.' . $file->getClientOriginalExtension();
                                $formular1 = new Formular();
                                $formular1->title = $filename;
                                $formular1->answer_id = $answ->id;
                                $formular1->image = 'uploads/formular/' . $name;
                                $file->move(public_path('uploads/formular'), $name);
                                $formular1->save();
                            }
                        }
                    }
                }
            }
        }
        Session::flash('success', 'Thêm mới thành công');

        return redirect('admin/question/' . $test_id . '/' . $idBatchOrRoom);
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
        $question = Question::where('id', $id)->first();

        return view('admin.question.show', ['question' => $question]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $idTest, $idBR)
    {

        $question = Question::findOrFail($id);

        $id_test=$idTest;
        $idBatchOrRoom=$idBR;
//    $test = Test::where('is_deleted', '0')->pluck('title', 'id');
        $numberAnswer = count($question->answerbatch);
        $answerbatch = $answercore = $answer =$foml=$isCorrect=$showQuestion= null;

        foreach ($question->answerbatch as $key => $item) {
            $answerbatch[$key] = $item->title;
            $answercore[$key] = $item->sub_score;
            $showQuestion[$key] = $item->status;
            foreach ($item->answer as $key2 => $item2) {
                $answer[$key][$key2] = $item2->content;
                $isCorrect[$key][$key2] = $item2->is_correct;
                foreach ($item2->formular as $key3 => $item3) {
                    $foml[$key][$key2][$key3] = $item3;
                }
            }
        }

        return view('admin.question.edit', ['idBatchOrRoom'=>$idBatchOrRoom,'id_test'=>$id_test, 'question' => $question, 'isCorrect' => $isCorrect, 'answerbatch' => $answerbatch, 'answercore' => $answercore, 'answer' => $answer, 'numberAnswer' => $numberAnswer,'foml'=>$foml,'showQuestion'=>$showQuestion]);

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
        $question = Question::findOrFail($id);
        $this->validate($request, [
//            'title' => 'required',
            'content' => 'required',
//            'explain' => 'required',
            'score' => 'required',
            'sub_score' => 'required'
        ]);
        $requestData = $request->all();
        $question->update($requestData);
        if ($request->hasFile('images')) {
            $files = $request->file('images');
            foreach ($question->formular as $item) {
                unlink($item->image);
                $item->delete();
            }
            foreach ($files as $file) {
                $filename = $file->getClientOriginalName();
                $name = md5(($filename) . date('Y-m-d H:i:s')) . '.' . $file->getClientOriginalExtension();
                $formular = new Formular();
                $formular->title = $filename;
                $formular->question_id = $question->id;
                $formular->image = 'uploads/formular/' . $name;
                $file->move(public_path('uploads/formular'), $name);
                $formular->save();
            }
        }
        $aB = $a = $fomlar = null;
        foreach ($question->answerbatch as $key => $item) {
            $aB[$key] = $item->id;
            foreach ($item->answer as $key2 => $item2) {
                $a[$item->id][$key2] = $item2->id;
                foreach ($item2->formular as $key3 => $item3) {
                    $fomlar[$item2->id][$key3] = $item3->id;
                }
            }
        }
        $test_id = $request->test_id;
        $idBatchOrRoom = $request->idBatchOrRoom;
        foreach ($request->answerbatch as $key => $item) {
            if (isset($aB[$key])) {
                $aBatch_id = $aB[$key];
                $answerBatch = Answerbatch::where('is_deleted', false)->where('id', $aBatch_id)->first();
                $answerBatch->title = $request->answerbatch[$key];
                $answerBatch->question_id = $question->id;
                $answerBatch->status=$request->showQuestion[$key];
                $answerBatch->sub_score = $request->sub_score[$key];
                $answerBatch->update();
                foreach ($request->answer[$key] as $key2 => $item2) {
                    if (isset($a[$aBatch_id][$key2])) {
                        $an_id = $a[$aBatch_id][$key2];
                        $answ = Answer::where('is_deleted', false)->where('id', $an_id)->first();
                        $answ->content = $request->answer[$key][$key2];
                        $answ->is_correct = (isset($request->answerCorrect[$key]) && $key2 == $request->answerCorrect[$key]) ? true : false;
                        $answ->answer_batch_id = $answerBatch->id;
                        $answ->update();
                        if (isset($request->image[$key])) {
                            foreach ($request->image[$key] as $key3 => $item3) {
                                if (isset($request->image[$key][$key2])) {
                                    $files = $request->image[$key][$key2];
                                    foreach ($files as $file) {
                                        $filename = $file->getClientOriginalName();
                                        $name = md5($filename) . '.' . $file->getClientOriginalExtension();
                                        $formular1 = new Formular();
                                        $formular1->title = $filename;
                                        $formular1->answer_id = $answ->id;
                                        $formular1->image = 'uploads/formular/' . $name;
                                        $file->move('uploads/formular', $name);
                                        $formular1->save();
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        Session::flash('success', 'Sửa đổi "' . $question->title . '"  thành công');

        return redirect('admin/question/' . $test_id . '/' . $idBatchOrRoom);
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
        $question = Question::findOrFail($id);
        $question->is_deleted = 1;
        foreach ($question->answerbatch as $item) {
            $item->is_deleted = 1;
            $item->save();
            foreach ($item->answer as $item2) {
                $item2->is_deleted = 1;
                $item2->save();

            }
        }
        $question->save();

        Session::flash('success', 'Xóa "' . $question->title . '"  thành công');

        return redirect()->back();
    }

    public function deleteFormular($id)
    {
        $formular = Formular::findOrFail($id);

        unlink($formular->image);
        $formular->delete();
        Session::flash('success', 'Xóa ảnh thành công');

        return redirect()->back();
    }
}







