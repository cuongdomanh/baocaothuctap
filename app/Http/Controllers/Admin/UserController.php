<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use DB;
use Session;
use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $list = User::where('is_deleted', false)->where('active_role',1);
        if ($request->has('keyword')) {
            $keyword = $request->get('keyword');
            $list = $list->where(
                function ($query) use ($keyword) {
                    $query->orWhere('name', 'like', "%$keyword%")
                        ->orWhere('email', 'like', "%$keyword%");
                }
            );

        }

        $list = $list->orderBy('id', 'DESC')->paginate(10);

        return view('admin.user.list', compact('list'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function member(Request $request){
        $testMember= 1;
        $list = User::where('is_deleted', false)->where('active_role',0);
        if ($request->has('keyword')) {
            $keyword = $request->get('keyword');
            $list = $list->where(
                function ($query) use ($keyword) {
                    $query->orWhere('name', 'like', "%$keyword%")
                        ->orWhere('email', 'like', "%$keyword%");
                }
            );

        }
        $list = $list->orderBy('id', 'DESC')->paginate(10);

        return view('admin.user.list', compact('list','testMember'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('display_name', 'id')->all();

        return view('admin.user.create', ['roles' => $roles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        die('abc');
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:password_confirmation',

        ]);

//        $fileName = $request->file('thumbnai')->getClientOriginalName();
//        $filePath = public_path('/images/');
//        $request->file('thumbnai')->move($filePath, $fileName);
//        if ($request->hasFile('thumbnai')) {
//            $requestData = $request->all();
//            $file = $request->file('thumbnai');
//            $name = md5($file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
//            $file->move('uploads/batch/', $name);
//            $requestData['thumbnail'] = 'uploads/batch/' . $name;
//            $requestData['slug'] = Helper::slug($requestData['title']);
//            $batch = Batch::create($requestData);
//        }
        $requestData = $request->all();
        if($request->hasFile('thumbnai')) {
            $file = $request->file('thumbnai');
            $name =  md5(($file) . date('Y-m-d H:i:s')). '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/user/'), $name);
            $requestData['thumbnai'] = 'uploads/user/' .$name;
        }
            $requestData['password'] = Hash::make($requestData['password']);
            $requestData['is_activated'] = isset($requestData['is_activated']) ? true : false;
            $requestData['actived_code'] = md5(rand(11111, 99995) . str_random(5));
            $requestData['active_role']=1;
            $user = User::create($requestData);
        foreach ($request->input('roles') as $key => $value) {
            $user->attachRole($value);
        }
        Session::flash('success', 'Thêm mới thành công');

        return redirect('admin/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::where('id', $id)
            ->where('is_deleted', '0')
            ->first();

        $userRole = $user->roles->pluck('id', 'id')->toArray();
        $roles = Role::pluck('display_name', 'id')->all();

        return view('admin.user.edit', ['user' => $user, 'roles' => $roles, 'userRole' => $userRole]);
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
        $user = User::findOrFail($id);
        $this->validate($request, [
            'name' => 'required',
//            'username' => 'required',
            'password' => 'same:password_confirmation',
            'roles' => 'required'
        ]);

        $requestData = $request->all();
        if ($request->hasFile('thumbnai')) {
            if(file_exists($user->thumbnai)){
                unlink($user->thumbnai);
            }
            $file = $request->file('thumbnai');
            $name =  md5(($file) . date('Y-m-d H:i:s')). '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/user'), $name);
            $requestData['thumbnai'] ='uploads/user/'.$name;
        }
            $requestData['password'] = ($requestData['password'] != '') ? Hash::make($requestData['password']) : $user->password;
            $requestData['is_activated'] = isset($requestData['is_activated']) ? true : false;
            $user->update($requestData);

        DB::table('role_user')->where('user_id', $id)->delete();
        foreach ($request->input('roles') as $key => $value) {
            $user->attachRole($value);
        }
        Session::flash('success', 'Cập nhật "' . $user->name . '" thành công');

        return redirect('admin/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->is_deleted = 1;
        $user->delete();
        $user->save();
        Session::flash('success', 'Xóa "' . $user->name . '" thành công');

        return redirect()->back();
    }
}






