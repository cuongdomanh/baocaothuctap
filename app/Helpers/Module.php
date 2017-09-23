<?php
/**
 * Created by PhpStorm.
 * User: anhcong
 * Date: 2/25/17
 * Time: 11:10 PM
 */

namespace app\Helpers;

use App\Role;

class Module
{

    public static function dashboard()
    {
        $dashboard = [
            ['slug' => 'dashboard', 'title' => 'Trang chủ', 'url' => 'admin', 'icon' => 'icon-bar-chart'],
        ];

        return $dashboard;
    }

    public static function course()
    {

        $course = [
            ['slug' => 'course', 'title' => 'Khóa học', 'url' => 'admin/course', 'icon' => 'glyphicon glyphicon-blackboard'],
            // ['slug' => 'video', 'title' => 'Video', 'url' => 'admin/video', 'icon' => 'glyphicon glyphicon-facetime-video '],
            ['slug' => 'folder', 'title' => 'Nhóm video', 'url' => 'admin/folder', 'icon' => 'glyphicon glyphicon-facetime-video '],

        ];

        return $course;
    }

    public static function book()
    {
        $book = [
            ['slug' => 'book', 'title' => 'Sách', 'url' => 'admin/book', 'icon' => 'glyphicon glyphicon-book
              glyphicon '],
            ['slug' => 'author', 'title' => 'Tác giả', 'url' => 'admin/author', 'icon' => 'glyphicon glyphicon-pencil '],
            ['slug' => 'unit', 'title' => 'Đơn vị', 'url' => 'admin/unit', 'icon' => 'glyphicon glyphicon-tasks'],
        ];

        return $book;
    }

    public static function user()
    {
        $user = [
            ['slug' => 'user', 'title' => 'Quản trị viên', 'url' => 'admin/user', 'icon' => 'glyphicon glyphicon-king '],
            ['slug' => 'member', 'title' => 'Thành viên', 'url' => 'admin/member', 'icon' => 'glyphicon glyphicon-queen '],
            ['slug' => 'role', 'title' => 'Phân quyền', 'url' => 'admin/role', 'icon' => 'glyphicon glyphicon-knight '],

//            ['slug'=>'userbatch', 'title'=>'User batch', 'url'=> 'admin/userbatch', 'icon'=>'glyphicon glyphicon-option-horizontal' ],
//            ['slug'=>'userbatchtest', 'title'=>'User batch test', 'url'=> 'admin/userbatchtest', 'icon'=>'glyphicon glyphicon-send' ],
//            ['slug'=>'usercourse', 'title'=>'User course', 'url'=> 'admin/usercourse', 'icon'=>'glyphicon glyphicon-saved' ],
//            ['slug'=>'usercoursetest', 'title'=>'User course test', 'url'=> 'admin/usercoursetest', 'icon'=>'glyphicon glyphicon-triangle-top' ],
//            ['slug'=>'userkey', 'title'=>'User key', 'url'=> 'admin/userkey', 'icon'=>'glyphicon glyphicon-lock ' ],

        ];

        return $user;
    }

    public static function folder()
    {
        $folder = [

        ];

        return $folder;
    }

    public static function contact()
    {
        $contact = [
            ['slug' => 'contact', 'title' => 'Hộp thư đến', 'url' => 'admin/contact', 'icon' => 'glyphicon glyphicon-envelope'],
            ['slug' => 'comment', 'title' => 'Đánh giá', 'url' => 'admin/comment/book', 'icon' => 'glyphicon glyphicon-comment'],
        ];

        return $contact;
    }

    public static function exam()
    {
        $exam = [
            ['slug' => 'batch', 'title' => 'Tệp đề thi', 'url' => 'admin/batch', 'icon' => 'glyphicon glyphicon-education'],
//            ['slug' => 'test', 'title' => 'Bài kiểm tra', 'url' => 'admin/test', 'icon' => 'glyphicon glyphicon-saved '],
//            ['slug' => 'question', 'title' => 'Câu hỏi', 'url' => 'admin/question', 'icon' => 'glyphicon glyphicon-question-sign '],
//            ['slug' => 'answerbatch', 'title' => 'Đáp án', 'url' => 'admin/answerbatch', 'icon' => 'glyphicon glyphicon-check'],
//            ['slug' => 'answer', 'title' => 'Đáp án', 'url' => 'admin/answer', 'icon' => 'glyphicon glyphicon-ok-sign '],
//            ['slug' => 'formular', 'title' => 'Formular', 'url' => 'admin/formular', 'icon' => 'glyphicon glyphicon-compressed'],

        ];

        return $exam;
    }

    public static function room()
    {
        $room = [
            ['slug' => 'room', 'title' => 'Phòng', 'url' => 'admin/room', 'icon' => 'glyphicon glyphicon-tree-conifer'],
//            ['slug'=>'roombatch', 'title'=>'Room batch', 'url'=> 'admin/roombatch', 'icon'=>'glyphicon glyphicon-collapse-down ' ],
//            ['slug'=>'roomuser', 'title'=>'Room user', 'url'=> 'admin/roomuser', 'icon'=>'glyphicon glyphicon-user' ],

        ];

        return $room;
    }

    public static function order()
    {
        $order = [
            ['slug' => 'order-book', 'title' => 'Hóa Đơn', 'url' => 'admin/order/all', 'icon' => 'glyphicon glyphicon-piggy-bank '],
            ['slug' => 'order-book', 'title' => 'Hóa Đơn tác giả ', 'url' => 'admin/order/all/myorder', 'icon' => 'glyphicon glyphicon-heart-empty '],
        ];

        return $order;
    }

    public static function content()
    {
        $content = [
            ['slug' => 'tag', 'title' => 'Thẻ', 'url' => 'admin/tag', 'icon' => 'glyphicon glyphicon-tags '],
            ['slug' => 'category', 'title' => 'Danh Mục', 'url' => 'admin/category', 'icon' => 'glyphicon glyphicon-list '],
            ['slug' => 'slide', 'title' => 'Slide', 'url' => 'admin/slide', 'icon' => 'glyphicon glyphicon-music '],
        ];

        return $content;
    }



    public static function all()
    {
        $mods = [
            ['slug' => 'dashboard', 'show' => true, 'title' => 'Dashboard', 'url' => 'admin', 'icon' => 'icon-home', 'permission' => []],
//            [ 'slug' => 'ringtone', 'show' => true, 'title' => 'Ring Tone Manager', 'url' => 'admin/ringtone', 'icon' => 'icon-diamond',
//                'permission' => ['ringtone-list', 'ringtone-create', 'ringtone-edit', 'ringtone-delete'] ],
            ['slug' => 'category', 'show' => true, 'title' => 'Quản Lý Danh Mục', 'url' => 'admin/category', 'icon' => 'icon-layers',
                'permission' => ['category-list', 'category-create', 'category-edit', 'category-delete']],
            ['slug' => 'user', 'show' => true, 'title' => 'Quản lý thành viên', 'url' => 'admin/user', 'icon' => 'icon-user',
                'permission' => ['user-list', 'user-create', 'user-edit', 'user-delete']],
            ['slug' => 'role', 'show' => true, 'title' => 'Quản lý quyền truy cập', 'url' => 'admin/role', 'icon' => 'icon-puzzle',
                'permission' => ['role-list', 'role-create', 'role-edit', 'role-delete']],
//            [ 'slug' => 'setting', 'show' => true, 'title' => 'Settings', 'url' => 'admin/setting', 'icon' => 'icon-settings',
//                'permission' => ['setting-list', 'setting-create', 'setting-edit', 'setting-delete'] ],
            ['slug' => 'course', 'show' => true, 'title' => 'Quản lý khóa học ', 'url' => 'admin/role', 'icon' => 'icon-puzzle',
                'permission' => ['course-list', 'course-create', 'course-edit', 'course-delete']],
            ['slug' => 'book', 'show' => true, 'title' => 'Quản lý sách ', 'url' => 'admin/role', 'icon' => 'icon-puzzle',
                'permission' => ['book-list', 'book-create', 'book-edit', 'book-delete']],
            ['slug' => 'test', 'show' => true, 'title' => 'Quản lý đề thi  ', 'url' => 'admin/role', 'icon' => 'icon-puzzle',
                'permission' => ['test-list', 'test-create', 'test-edit', 'test-delete']],
            ['slug' => 'room', 'show' => true, 'title' => 'Quản lý phòng thi  ', 'url' => 'admin/role', 'icon' => 'icon-puzzle',
                'permission' => ['room-list', 'room-create', 'room-edit', 'room-delete']],
            ['slug' => 'pay', 'show' => true, 'title' => 'Quản lý hóa đơn', 'url' => 'admin/order/all', 'icon' => 'icon-puzzle',
                'permission' => ['pay-list', 'pay-create', 'pay-edit', 'pay-delete']],
        ];

        return $mods;
    }

    public static function arrayRole()
    {
        $role = Role::all();
        $string = "role:";
        foreach ($role as $key => $item) {
            if ($key == count($role) - 1) {
                $string = $string . $item->name;
            } else {
                $string = $string . $item->name . "|";
            }
        }
        return $string;

    }
}


