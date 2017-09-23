<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Carbon\Carbon;
use Session;

class ContactController extends Controller
{
    public function contact(Request $request)
    {
        /*$this->validate($request, [
            'name' => 'required',
            'phone' => 'required|numeric',
            'subject' => 'required',
            'content1' => 'required',
        ]);*/
        $contact = new Contact();
        $data = [
            'name' => $request->name,
            'phone' => $request->phone,
            'title' => $request->subject,
            'content' => $request->content1,
            /*'status' => false,*/
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
        Contact::create($data);

        Session::flash('success', 'Cám ơn bạn đã liên hệ với chúng tôi');
//        echo "<script>
//                alert('Cám ơn bạn đã liên hệ. Chúng tôi sẽ liên lạc với bạn trong thời gian sớm nhất.');
//            </script>";
        return redirect()->back();
    }

//    public function index(Request $request)
//    {
//        $keyword = '';
//        if ($request->has('keyword')) {
//            $keyword = $request->get('keyword');
//            $list    = Contact::orderBy('id', 'DESC')
//                ->where(function ($query) use ($keyword) {
//                    $query->orwhere('name', 'like', "%$keyword%");
//
//                })
//                ->paginate(5);
//        }
////        else {
////            $list = Contact::orderBy('id', 'ASC')
////                ->paginate(5);
////        }
//
//        return view('admin.contact.list', ['list' => $list])
//            ->with('i', ($request->input('page', 1) - 1) * 5);
//    }
//
//    public function edit($id)
//    {
//        $contact =Contact::findOrFail($id);
//        return view('admin.contact.edit', compact('contact'));
//    }
//
//    public function update(Request $request, $id)
//    {
//        $row = Contact::findOrFail($id);
//        $row->status =$request->status;
//        $row->save();
//        Session::flash('success','Cập nhật thành công!');
//        return redirect('admin/contact');
//    }
}

