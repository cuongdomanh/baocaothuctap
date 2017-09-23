<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use PDF;

class DownloadController extends Controller
{
    public function pdfview(Request $request)
    {
        $download = DB::table('download')->get();
        view()->share('download', $download);

        if($request->has('down')){
            $pdf = PDF::loadView('pdfview');
            return $pdf->download('pdfview.pdf');
        }

        return view('client.question.question');
    }
}
