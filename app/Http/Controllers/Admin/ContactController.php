<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;
use Carbon\Carbon;
use Session;

class ContactController extends Controller
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
            $list = Contact::orderBy('id', 'DESC')
                ->where(function ($query) use ($keyword) {
                    $query->orwhere('name', 'like', "%$keyword%");

                })
                ->paginate(5);
        } else {
            $list = Contact::orderBy('id', 'ASC')
                ->paginate(5);
        }

        return view('admin.contact.list', ['list' => $list, 'keyword' => $keyword])->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
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
    public function edit($id)
    {
        $contact = Contact::findOrFail($id);

        return view('admin.contact.edit', ['contact' => $contact]);
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
        $contact = Contact::findOrFail($id);
        $contact->status = $request->status;
        $contact->save();
        Session::flash('success', 'Cập nhật thành công!');

        return redirect('admin/contact');
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
        //
    }

//    public function contact(Request $request)
//    {
//        /*$this->validate($request, [
//            'name' => 'required',
//            'phone' => 'required|numeric',
//            'subject' => 'required',
//            'content1' => 'required',
//        ]);*/
//        $contact = new Contact();
//        $data = [
//            'name' => $request->name,
//            'phone' => $request->phone,
//            'title' => $request->subject,
//            'content' => $request->content1,
//            /*'status' => false,*/
//            'created_at' => Carbon::now(),
//            'updated_at' => Carbon::now()
//        ];
//        Contact::create($data);
////        Session::flash('success', 'Cám ơn bạn đã liên hệ với chúng tôi');
//        echo "<script>
//                alert('Cám ơn bạn đã liên hệ. Chúng tôi sẽ liên lạc với bạn trong thời gian sớm nhất.');
//            </script>";
//        //return redirect('about')->with(compact('contact'));
//    }
}

