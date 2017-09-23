<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Answerbatch;
use App\batch_comment;
use App\Question;
use App\QuestionComment;
use App\room_test;
use App\room_user;
use App\Test;
use App\User;
use App\user_batch;
use App\user_batch_test;
use App\user_score;
use App\user_test;
use App\UploadBatch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class TestController extends Controller
{
    public function index($batchOrRoom_id, $id)
    {

        $download = DB::table('upload_batch')->get();
        $download_file = null;
        $rank = null;
        list($id1, $batchOrRoom) = explode("-", $batchOrRoom_id);
        $test = Test::where('is_deleted', false)
            ->where('id', $id)
            ->first();
        session_start();
        $_SESSION['TIMER'] = time() + $test->work_time * 60;
        if ($batchOrRoom == 'b') {
            $batch_id = $id1;
            $userBatch = user_batch::where('is_deleted', false)
                ->where('batch_id', $batch_id)
                ->first();
            if (isset($userBatch)) {
                $getTestRank = user_batch_test::where('is_deleted', false)
                    ->where('test_id', $id)
                    ->whereNotNull('total_score')
                    ->orderBy('total_score', 'DESC')->get();

                if (isset($getTestRank[0])) {
                    foreach ($getTestRank as $item) {
                        $user = User::where('is_deleted', false)
                            ->where('id', $item->userBatch->user_id)
                            ->first();
                        if (isset($user)) {
                            $rank[$item->total_score][] = $user;
                        }
                    }

                }
            } else {
                $getTestRank = user_test::where('is_deleted', false)
                    ->where('test_id', $id)
                    ->whereNotNull('score')
                    ->orderBy('score', 'DESC')
                    ->get();
                if (isset($getTestRank[0])) {
                    foreach ($getTestRank as $item) {
                        $user = User::where('is_deleted', false)
                            ->where('id', $item->user_id)
                            ->first();
                        $rank[$item->score][] = $user;
                    }
                }
            }


            $kt = 1;
            return view('client.question.question', ['test' => $test,
                'batch_id' => $batch_id,
                'rank' => $rank,
                'download_file' => $download_file,
                'download' => $download,
                'kt' => $kt,
            ]);

        }
        if ($batchOrRoom == 'r') {
            $room_id = $id1;
            $getTestRank = room_user::where('is_deleted', false)
                ->where('test_id', $id)
                ->whereNotNull('scores_test')
                ->orderBy('scores_test', 'DESC')
                ->get();
            if (isset($getTestRank[0])) {
                foreach ($getTestRank as $item) {
                    $user = User::where('is_deleted', false)
                        ->where('id', $item->user_id)
                        ->first();
                    $rank[$item->scores_test][] = $user;
                }
            }
            return view('client.question.question', ['test' => $test, 'room_id' => $room_id, 'rank' => $rank]);
        }

        return redirect()->back();


    }

    public function Score(Request $request, $batchOrRoom_id, $id)
    {

        $kt = null;
        $answerRight = $allAnswerRight = '';
        $totalCorse = 0;
        $answerUser = null;
        $maxScore = 0;// điểm cao nhất ;
        $numberAnswerRight = 0;// so cau tra loi dung
        $currenLoc = 0; //     vi tri hien tai
        $maxLocation = 0; // so vi tri ;

        list($id1, $batchOrRoom) = explode("-", $batchOrRoom_id);
        $test = Test::where('is_deleted', false)->where('id', $id)->first();
        $test1 = array();
        $question = $answerBatch = $anwer = null;
        $data = [];
        //tuyet voi ; 
        foreach ($request->questionPost as $key => $item) {
            $question= Question::where('id', $item)->first();
            $batch=null;
            $batchArray=null;
            foreach ($request['answerBatchPost'][$item] as $key2 => $item2) {
                $batch= Answerbatch::where('is_deleted',false)->where('id',$item2)->first();
                $answer=null;
                foreach ($request['answerPost'][$item][$item2] as $key3 => $item3) {
                    $answer[] = Answer::where('id', $item3)->first();
                }
                $batch->answer=$answer;
                $batchArray[]=$batch;
            }
            $question->answerbatch=$batchArray;
            $qItem[]=$question;
        }
       
         //
        if ($request->has('answer')) {
            foreach ($request->answer as $questionKey => $item) {
                foreach ($item as $asBkey => $item1) {
                    $answerUser[$questionKey][$asBkey] = $item1;
                    $answerRight[$asBkey] = Answer::where('id', $item[$asBkey])
                        ->where('is_correct', true)
                        ->first();
                    if (isset($answerRight[$asBkey])) {
                        $numberAnswerRight++;
                        $totalCorse += $answerRight[$asBkey]->answerbatch->sub_score;
                    }
                }
            }
        }
        if (isset($request->asB)) {
            foreach ($request->asB as $key => $item) {
                $allAnswerRight[$item] = Answer::where('answer_batch_id', $item)
                    ->where('is_correct', true)
                    ->first();
            }
        }
        $batch_id = $room_id = $rank = null;
        if (Auth::check()) {
            if ($batchOrRoom == 'b') {
                $batch_id = $id1;
                // co 3 truong hop la thi mien phi va thi tinh tien , thi thoe khoa học
                $userBatch = user_batch::where('is_deleted', false)
                    ->where('user_id', Auth::id())
                    ->where('batch_id', $batch_id)
                    ->first();
                if (isset($userBatch)) {
                    $userBatchTest = user_batch_test::where('is_deleted', false)
                        ->where('user_batch_test_id', $userBatch->id)
                        ->where('test_id', $id)
                        ->first();
                    $userBatchTest->total_score = $totalCorse;
                    $userBatchTest->update();
                    $userScore = new user_score();
                    $userScore->batch_id = $batch_id;
                    $userScore->test_id = $id;
                    $userScore->user_id = Auth::id();
                    $userScore->date = date("Y-m-d H:i:s");
                    $userScore->score = $totalCorse;
                    $userScore->save();

                    $rank = null;
                    $getTestRank = user_batch_test::where('is_deleted', false)
                        ->where('test_id', $id)
                        ->whereNotNull('total_score')
                        ->orderBy('total_score', 'DESC')
                        ->get();
                    if (isset($getTestRank[0])) {
                        $maxScore = $getTestRank[0]['score'];
                        foreach ($getTestRank as $item) {
                            $maxLocation = count($getTestRank);
                            $maxScore = $getTestRank[0]['score'];
                            $user = User::where('is_deleted', false)
                                ->where('id', $item->userBatch->user_id)
                                ->first();

                            $rank[$item->total_score][] = $user;
                            if ($item->user_id == Auth::id()) {
                                $currenLoc = count($rank);
                            }
                        }
                    }

                } else {
                    $userTest = user_test::where('is_deleted', false)
                        ->where('user_id', Auth::id())
                        ->where('test_id', $id)
                        ->first();
                    if (isset($userTest)) {
                        $userTest->score = $totalCorse;
                        $userTest->update();
                    } else {
                        $userTest = new user_test();
                        $userTest->user_id = Auth::id();
                        $userTest->test_id = $id;
                        $userTest->score = $totalCorse;
                        $userTest->save();
                    }
                    // rank
                    $getTestRank = user_test::where('is_deleted', false)
                        ->where('test_id', $id)
                        ->whereNotNull('score')
                        ->orderBy('score', 'DESC')
                        ->get();
                    if (isset($getTestRank[0])) {
                        $maxLocation = count($getTestRank);
                        $maxScore = $getTestRank[0]['score'];
                        foreach ($getTestRank as $item) {
                            $user = User::where('is_deleted', false)
                                ->where('id', $item->user_id)
                                ->first();

                            $rank[$item->score][] = $user;
                            if ($item->user_id == Auth::id()) {
                                $currenLoc = count($rank);
                            }

                        }
                    }

                }

            }

            if ($batchOrRoom == 'r') {
                $room_id = $id1;
                $roomTest = room_user::where('is_deleted', false)
                    ->where('room_id', $room_id)
                    ->where('user_id', Auth::id())
                    ->where('test_id', $id)
                    ->first();
                if (isset($roomTest)) {
                    $roomTest->scores_test = $totalCorse;
                    $roomTest->update();

                    $userScore = new user_score();
                    $userScore->room_id = $room_id;
                    $userScore->test_id = $id;
                    $userScore->user_id = Auth::id();
                    $userScore->date = date("Y-m-d H:i:s");
                    $userScore->score = $totalCorse;
                    $userScore->save();


                } else {
                    $roomTest = new room_test();
                    $roomTest->user_id = Auth::id();
                    $roomTest->room_id = $room_id;
                    $roomTest->test_id = $id;
                    $roomTest->scores_test = $totalCorse;
                    $roomTest->save();
                }
                $getTestRank = room_user::where('is_deleted', false)
                    ->where('test_id', $id)
                    ->whereNotNull('scores_test')
                    ->orderBy('scores_test', 'DESC')
                    ->get();
                if (isset($getTestRank[0])) {
                    $maxLocation = count($getTestRank);
                    $maxScore = $getTestRank[0]['score'];
                    foreach ($getTestRank as $item) {
                        $user = User::where('is_deleted', false)
                            ->where('id', $item->user_id)
                            ->first();
                        $rank[$item->scores_test][] = $user;
                        if ($item->user_id == Auth::id()) {
                            $currenLoc = count($rank);
                        }
                    }
                }
            }
        }

        return view('client.question.question', ['answerRight' => $answerRight,
            'test' => $test,
            'allAnswerRight' => $allAnswerRight,
            'totalCorse' => $totalCorse,
            'batch_id' => $batch_id,
            'room_id' => $room_id,
            'rank' => $rank,
            'answerUser' => $answerUser,
            'numberAnswerRight' => $numberAnswerRight,
            'maxScore' => $maxScore,
            'currenLoc' => $currenLoc,
            'maxLocation' => $maxLocation,
            'kt' => $kt,
        ]);
    }

    function reporting(Request $request)
    {
        $data = [];

        $q = new batch_comment();
        $q->question_id = $request->answerId;
        $q->url = $request->urlId;
        $q->content = $request->reportContent;
        $q->name = Auth::user()->name;
        $q->email = Auth::user()->email;
        $q->save();

        $data['content'] = $request->reportContent;
        $data['email'] = $q->email;
        $data['name'] = $q->name;
        $data['created_at'] = $q->created_at;

        return view('client.question.comment', $data);

    }
}










