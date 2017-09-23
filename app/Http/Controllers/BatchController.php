<?php

namespace App\Http\Controllers;

use App\Category;
use App\QuestionComment;
use App\user_batch;
use App\Video;
use App\Batch;
use Illuminate\Http\Request;
use App\batch_comment;
use Auth;
use Cart;

class BatchController extends Controller
{
    function __construct()
    {
        $keyword = '';
        view()->share(['keyword' => $keyword]);
    }

    public function index($id = null)
    {
        $batch = Batch::where('is_deleted', false)->orderBy('created_at', 'DESC')->get();
        if (isset($id)) {
            $batch = Batch::where('is_deleted', false)
                ->where('categories_id', $id)->orderBy('id','DESC')
                ->paginate(15);
        }
        $category = Category::where('is_deleted', false)->where('parent_id', '>', 0)->where('type', 2)->get();

        return view('client.batch.batch', ['batch' => $batch, 'category' => $category]);
    }

    public function batchCart(Request $request, $id)
    {
        $batchCart = Batch::where('is_deleted', 0)
            ->where('id', $id)->first();

        Cart::add(['id' => $id, 'name' => $batchCart->title,
                   'qty' => 1, 'price' => $batchCart->price * (1 - $batchCart->discount / 100),
                   'options' => ['slug' => $batchCart->slug,
                   'thumbnail' => $batchCart->thumbnail, 'type' => 'batch']
        ]);

        return redirect()->back();
    }

    public function test(Request $request, $id=null, $key = null)
    {
        $kt=0;
        if(isset($key)){
            $userbatch=user_batch::where('is_deleted',false)
                ->where('user_id',Auth::id())
                ->get();
            foreach ($userbatch as $item){
                if(md5($item->secret_key) ==$key ){
                       $kt=1;
                    break;
                }
            }
        }

        $batch = Batch::where('is_deleted', false)
            ->find($id);
        $rank=null; 
        if($kt==1 ){
            if(isset($batch['test'][0])) {
                foreach ($batch->test as $item) {
                    $Score = \DB::table('user_score')->select(\DB::raw('max(score) as score'))
                        ->where('user_id', Auth::id())
                        ->where('test_id',$item->id)
                        ->groupBy('batch_id')->first();
                    if(isset($Score)) {
                        $rank[$item->id] = $Score->score;
                    }
                }

            }
        }

        return view('client.batch.test', ['batch' => $batch,'kt'=>$kt,'rank'=>$rank ]);

    }

}










