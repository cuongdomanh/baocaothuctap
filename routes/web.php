<?php

Auth::routes();
Route::auth();
Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => [Module::arrayRole()], 'prefix' => 'admin'], function () {
        Route::get('/', ['as' => 'admin.dashboard', 'uses' => 'Admin\DashboardController@stastics']);
        Route::get('member', ['as' => 'admin.user.member', 'uses' => 'Admin\UserController@member',
            'middleware' => ['permission:user-list|user-create|user-edit|user-delete']]);
        Route::get('user', ['as' => 'admin.user.index', 'uses' => 'Admin\UserController@index',
            'middleware' => ['permission:user-list|user-create|user-edit|user-delete']]);
        Route::post('user', ['as' => 'admin.user.store', 'uses' => 'Admin\UserController@store',
            'middleware' => ['permission:user-create'
            ]]);
        Route::get('user/create', ['as' => 'admin.user.create', 'uses' => 'Admin\UserController@create',
            'middleware' => ['permission:user-create']]);
        Route::get('user/{id}/edit', ['as' => 'admin.user.edit', 'uses' => 'Admin\UserController@edit',
            'middleware' => ['permission:user-edit']]);
        Route::patch('user/{id}', ['as' => 'admin.user.update', 'uses' => 'Admin\UserController@update',
            'middleware' => ['permission:user-edit']]);
        Route::delete('user/{id}', ['as' => 'admin.user.destroy', 'uses' => 'Admin\UserController@destroy',
            'middleware' => ['permission:user-delete']]);

        Route::get('category', ['as' => 'admin.category.index', 'uses' => 'Admin\CategoryController@index',
            'middleware' => ['permission:category-list|category-create|category-edit|category-delete']]);
        Route::post('category', ['as' => 'admin.category.store', 'uses' => 'Admin\CategoryController@store',
            'middleware' => ['permission:category-create']]);
        Route::get('category/create', ['as' => 'admin.category.create', 'uses' => 'Admin\CategoryController@create',
            'middleware' => ['permission:category-create']]);
        Route::get('category/{id}/edit', ['as' => 'admin.category.edit', 'uses' => 'Admin\CategoryController@edit',
            'middleware' => ['permission:category-edit']]);
        Route::patch('category/{id}', ['as' => 'admin.category.update', 'uses' => 'Admin\CategoryController@update',
            'middleware' => ['permission:category-edit']]);
        Route::delete('category/{id}', ['as' => 'admin.category.destroy', 'uses' => 'Admin\CategoryController@destroy',
            'middleware' => ['permission:category-delete']]);
        //role
        Route::get('role', ['as' => 'admin.role.index', 'uses' => 'Admin\RoleController@index',
            'middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);
        Route::post('role', ['as' => 'admin.role.store', 'uses' => 'Admin\RoleController@store',
            'middleware' => ['permission:role-create']]);
        Route::get('role/create', ['as' => 'admin.role.create', 'uses' => 'Admin\RoleController@create',
            'middleware' => ['permission:role-create']]);
        Route::get('role/{id}/edit', ['as' => 'admin.role.edit', 'uses' => 'Admin\RoleController@edit',
            'middleware' => ['permission:role-edit']]);
        Route::patch('role/{id}', ['as' => 'admin.role.update', 'uses' => 'Admin\RoleController@update',
            'middleware' => ['permission:role-edit']]);
        Route::delete('role/{id}', ['as' => 'admin.role.destroy', 'uses' => 'Admin\RoleController@destroy',
            'middleware' => ['permission:role-delete']]);
//         Route::resource('role', 'Admin\RoleController');
        //course
//         Route::resource('course', 'Admin\CourseController');


        Route::get('course', ['as' => 'admin.course.index', 'uses' => 'Admin\CourseController@index',
            'middleware' => ['permission:course-list|course-create|course-edit|course-delete']]);
        Route::post('course', ['as' => 'admin.course.store', 'uses' => 'Admin\CourseController@store',
            'middleware' => ['permission:course-create']]);
        Route::get('course/create', ['as' => 'admin.course.create', 'uses' => 'Admin\CourseController@create',
            'middleware' => ['permission:course-create']]);
        Route::get('course/{id}', 'Admin\CourseController@show');
        Route::get('course/{id}/edit', ['as' => 'admin.course.edit', 'uses' => 'Admin\CourseController@edit',
            'middleware' => ['permission:course-edit']]);
        Route::patch('course/{id}', ['as' => 'admin.course.update', 'uses' => 'Admin\CourseController@update',
            'middleware' => ['permission:course-edit']]);
        Route::delete('course/{id}', ['as' => 'admin.course.destroy', 'uses' => 'Admin\CourseController@destroy',
            'middleware' => ['permission:course-delete']]);

        //
        // unit
//         Route::resource('book', 'Admin\BookController');
        // book
        Route::get('book', ['as' => 'admin.book.index', 'uses' => 'Admin\BookController@index',
            'middleware' => ['permission:book-list|book-create|book-edit|book-delete']]);
        Route::post('book', ['as' => 'admin.book.store', 'uses' => 'Admin\BookController@store',
            'middleware' => ['permission:book-create']]);
        Route::get('book/create', ['as' => 'admin.book.create', 'uses' => 'Admin\BookController@create',
            'middleware' => ['permission:book-create']]);
        Route::get('book/{id}', 'Admin\BookController@show');
        Route::get('book/{id}/edit', ['as' => 'admin.book.edit', 'uses' => 'Admin\BookController@edit',
            'middleware' => ['permission:book-edit']]);
        Route::patch('book/{id}', ['as' => 'admin.book.update', 'uses' => 'Admin\BookController@update',
            'middleware' => ['permission:book-edit']]);
        Route::delete('book/{id}', ['as' => 'admin.book.destroy', 'uses' => 'Admin\BookController@destroy',
            'middleware' => ['permission:book-delete']]);
        Route::get('deleteimage/{id}', ['as' => 'admin.book.edit', 'uses' => 'Admin\BookController@deleteimage',
            'middleware' => ['permission:book-edit']]);
        Route::get('book/course/{id}','Admin\BookController@codeCourse');
        //
        Route::resource('unit', 'Admin\UnitController');
       
        Route::resource('contact', 'Admin\ContactController');
        Route::resource('formular', 'Admin\FormularController');
        Route::get('book/author/{id}', 'Admin\AuthorController@create');
        Route::resource('author', 'Admin\AuthorController');
        Route::resource('folder', 'Admin\FolderController');
        Route::get('course/video/{id}', 'Admin\VideoController@create');

        Route::get('course/detail/{id}', 'Admin\VideoController@detailVideo');
        Route::get('video/{id}/{id1}/edit', ['uses' => 'Admin\VideoController@edit']);
        Route::delete('video/{id}/{id1}', ['uses' => 'Admin\VideoController@destroy']);
        Route::resource('video', 'Admin\VideoController');
        Route::get('deletedoc/{id}', 'Admin\UploadBatchController@deletedoc');
        //         Route::resource('room', 'Admin\RoomController');
//         room
        Route::get('room', ['uses' => 'Admin\RoomController@index',
            'middleware' => ['permission:room-list|room-create|room-edit|room-delete']]);
        Route::post('room', ['uses' => 'Admin\RoomController@store',
            'middleware' => ['permission:room-create']]);
        Route::get('room/create', ['uses' => 'Admin\RoomController@create',
            'middleware' => ['permission:room-create']]);
        Route::get('room/{id}/edit', ['uses' => 'Admin\RoomController@edit',
            'middleware' => ['permission:room-edit']]);
        Route::patch('room/{id}', ['uses' => 'Admin\RoomController@update',
            'middleware' => ['permission:room-edit']]);
        Route::delete('room/{id}', ['uses' => 'Admin\RoomController@destroy',
            'middleware' => ['permission:room-delete']]);
        //
        Route::get('book/tag/{id}', 'Admin\TagController@create');
        Route::get('course/tag/{id}/{id1}', 'Admin\TagController@create');
        Route::resource('tag', 'Admin\TagController');
        // answer

        Route::get('anwserbatch/anwser/{id}', ['uses' => 'Admin\AnswerController@create',
            'middleware' => ['permission:test-create']]);
//         Route::get('anwserbatch/anwser/{id}','Admin\AnswerController@create');
//         Route::resource('answer', 'Admin\AnswerController');
        // answer
        Route::get('answer', ['uses' => 'Admin\AnswerController@index',
            'middleware' => ['permission:test-list|test-create|test-edit|test-delete']]);
        Route::post('answer', ['uses' => 'Admin\AnswerController@store',
            'middleware' => ['permission:test-create']]);
        Route::get('answer/create', ['uses' => 'Admin\AnswerController@create',
            'middleware' => ['permission:test-create']]);
        Route::get('answer/{id}/edit', ['uses' => 'Admin\AnswerController@edit',
            'middleware' => ['permission:test-edit']]);
        Route::patch('answer/{id}', ['uses' => 'Admin\AnswerController@update',
            'middleware' => ['permission:test-edit']]);
        Route::delete('answer/{id}', ['uses' => 'Admin\AnswerController@destroy',
            'middleware' => ['permission:test-delete']]);
        //
//         Route::get('question/anwerbatch/{id}','Admin\AnswerbatchController@create');
        Route::get('question/anwerbatch/{id}', ['uses' => 'Admin\AnswerbatchController@create',
            'middleware' => ['permission:test-create']]);
//         Route::resource('answerbatch', 'Admin\AnswerbatchController');
//         answer batch
//         Route::get('answerbatch', ['uses' => 'Admin\AnswerbatchController@index',
//             'middleware' => [ 'permission:test-list|test-create|test-edit|test-delete' ]]);
        Route::post('answerbatch', ['uses' => 'Admin\AnswerbatchController@store',
            'middleware' => ['permission:test-create']]);
        Route::get('answerbatch/create', ['uses' => 'Admin\AnswerbatchController@create',
            'middleware' => ['permission:test-create']]);
        Route::get('answerbatch/{id}/{idBatchOrRoom}', ['uses' => 'Admin\AnswerbatchController@index',
            'middleware' => ['permission:test-list|test-create|test-edit|test-delete']]);
        Route::get('answerbatch/{id}/edit', ['uses' => 'Admin\AnswerbatchController@edit',
            'middleware' => ['permission:test-edit']]);
        Route::patch('answerbatch/{id}', ['uses' => 'Admin\AnswerbatchController@update',
            'middleware' => ['permission:test-edit']]);
        Route::delete('answerbatch/{id}', ['uses' => 'Admin\AnswerbatchController@destroy',
            'middleware' => ['permission:test-delete']]);
        //
//         Route::get('test/question/{id}','Admin\QuestionController@create');
        Route::get('test/question/{id}', ['uses' => 'Admin\QuestionController@create',
            'middleware' => ['permission:test-create']]);
        //   question
//         Route::resource('question', 'Admin\QuestionController');
//         Route::get('question', ['uses' => 'Admin\QuestionController@index',
//             'middleware' => [ 'permission:test-list|test-create|test-edit|test-delete' ]]);
        Route::post('question', ['uses' => 'Admin\QuestionController@store',
            'middleware' => ['permission:test-create']]);
        Route::get('question/create/{id}/{idBatchOrRoom}', ['uses' => 'Admin\QuestionController@create',
            'middleware' => ['permission:test-create']]);

        Route::get('question/{id}/{idTest}/{idBR}/edit', ['uses' => 'Admin\QuestionController@edit',
            'middleware' => ['permission:test-edit']]);

        Route::get('question/{id}/{BatchOrRoom}', ['uses' => 'Admin\QuestionController@index',
            'middleware' => ['permission:test-list|test-create|test-edit|test-delete']]);
        Route::patch('question/{id}', ['uses' => 'Admin\QuestionController@update',
            'middleware' => ['permission:test-edit']]);
        Route::delete('question/{id}', ['uses' => 'Admin\QuestionController@destroy',
            'middleware' => ['permission:test-delete']]);
        Route::get('questionFormular/{id}', ['uses' => 'Admin\QuestionController@deleteFormular',
            'middleware' => ['permission:test-list|test-create|test-edit|test-delete']]);
        //
//         Route::get('batch/test/{id}','Admin\TestController@create');
        Route::get('batch/test/{id}', ['uses' => 'Admin\TestController@create',
            'middleware' => ['permission:test-create']]);
//         test
//         Route::resource('test', 'Admin\TestController');

        Route::post('test', ['uses' => 'Admin\TestController@store',
            'middleware' => ['permission:test-create']]);
        Route::get('test/create/{id}', ['uses' => 'Admin\TestController@create',
            'middleware' => ['permission:test-create']]);
        Route::get('test/{id}', ['uses' => 'Admin\TestController@index',
            'middleware' => ['permission:test-list|test-create|test-edit|test-delete']]);
        Route::get('test/{id}/{batchOrRoom}/edit', ['uses' => 'Admin\TestController@edit',
            'middleware' => ['permission:test-edit']]);
        Route::patch('test/{id}', ['uses' => 'Admin\TestController@update',
            'middleware' => ['permission:test-edit']]);
        Route::delete('test/{id}', ['uses' => 'Admin\TestController@destroy',
            'middleware' => ['permission:test-delete']]);
        Route::get('deletefile/{id}', ['as' => 'admin.test.edit', 'uses' => 'Admin\TestController@deletefile']);


         Route::get('batch', ['uses' => 'Admin\BatchController@index',
             'middleware' => [ 'permission:test-list|test-create|test-edit|test-delete' ]]);
         Route::post('batch', [   'uses' => 'Admin\BatchController@store',
             'middleware' => [ 'permission:test-create' ]]);
         Route::get('batch/create', [ 'uses' => 'Admin\BatchController@create',
             'middleware' => [ 'permission:test-create' ]]);
         Route::get('batch/{id}/edit',  [    'uses' => 'Admin\BatchController@edit',
             'middleware' => [ 'permission:test-edit' ]]);
         Route::patch('batch/{id}', [  'uses' => 'Admin\BatchController@update',
             'middleware' => [ 'permission:test-edit' ]]);
         Route::delete('batch/{id}', [ 'uses' => 'Admin\BatchController@destroy',
             'middleware' => [ 'permission:test-delete' ]]);
          //
         // order
         Route::get('order/book', [ 'uses' => 'Admin\OrderController@book',
             'middleware' => [ 'permission:pay-list|pay-create|pay-edit|pay-delete' ]]);
         Route::get('order/room', [ 'uses' => 'Admin\OrderController@room',
             'middleware' => [ 'permission:pay-list|pay-create|pay-edit|pay-delete' ]]);
         Route::get('order/room/{myorder}', [ 'uses' => 'Admin\OrderController@room',
            'middleware' => ['permission:room-list|room-create|room-edit|room-delete']]);

//         Route::get('order/book', 'Admin\OrderController@book');
//         Route::get('order/course', 'Admin\OrderController@course');
        Route::get('order/course', ['uses' => 'Admin\OrderController@course',
            'middleware' => ['permission:pay-list|pay-create|pay-edit|pay-delete']]);
        Route::get('order/course/{myorder}', ['uses' => 'Admin\OrderController@course',
            'middleware' => ['permission:course-list|course-create|course-edit|course-delete']]);
//         Route::get('order/all', 'Admin\OrderController@all');
        Route::get('order/all', ['uses' => 'Admin\OrderController@all',
            'middleware' => ['permission:pay-list|pay-create|pay-edit|pay-delete']]);
        Route::get('order/all/{myorder}', ['uses' => 'Admin\OrderController@all']);
//         Route::get('order/batch', 'Admin\OrderController@batch');
        Route::get('order/batch/', ['uses' => 'Admin\OrderController@batch',
            'middleware' => ['permission:pay-list|pay-create|pay-edit|pay-delete']]);
        Route::get('order/batch/{myorder?}', ['uses' => 'Admin\OrderController@batch',
            'middleware' => [ 'permission:test-list|test-create|test-edit|test-delete' ]]);
//         Route::get('order/{id}', 'Admin\OrderController@show');
        Route::get('order/{id}', ['uses' => 'Admin\OrderController@show',
            'middleware' => ['permission:pay-list|pay-create|pay-edit|pay-delete']]);

        Route::get('order/{id}/edit', ['as' => 'admin.order.edit', 'uses' => 'Admin\OrderController@edit',
            'middleware' => ['permission:pay-edit']]);
        Route::patch('order/{id}', ['as' => 'admin.order.update', 'uses' => 'Admin\OrderController@update',
            'middleware' => ['permission:pay-edit']]);
        Route::delete('order/{id}', ['as' => 'admin.order.destroy', 'uses' => 'Admin\OrderController@destroy',
            'middleware' => ['permission:pay-delete']]);

        Route::get('slide', ['uses' => 'Admin\SlideController@index',
            'middleware' => [ 'permission:test-list|test-create|test-edit|test-delete' ]]);
        Route::post('slide', [   'uses' => 'Admin\SlideController@store',
            'middleware' => [ 'permission:test-create' ]]);
        Route::get('slide/create', [ 'uses' => 'Admin\SlideController@create',
            'middleware' => [ 'permission:test-create' ]]);
        Route::get('slide/{id}/edit',  [    'uses' => 'Admin\SlideController@edit',
            'middleware' => [ 'permission:test-edit' ]]);
        Route::patch('slide/{id}', [  'uses' => 'Admin\SlideController@update',
            'middleware' => [ 'permission:test-edit' ]]);
        Route::delete('slide/{id}', [ 'uses' => 'Admin\SlideController@destroy',
            'middleware' => [ 'permission:test-delete' ]]);

        Route::get('comment/book', ['uses' => 'Admin\CommentController@book']);
        Route::get('comment/batch', ['uses' => 'Admin\CommentController@batch']);
        Route::get('comment/course', ['uses' => 'Admin\CommentController@course']);

    });
});
Route::get('image', 'HomeController@index');


Route::get('home', 'HomeController@index');
Route::get('', 'HomeController@index');

//ADD TO CART

Route::get('usercourse/{idCourse}/{keyCourse}', 'VideoController@index')->middleware('checkCourse');

Route::get('video/{idCourse}/{idVideo}', 'VideoController@index')->middleware('checkVideo');
Route::get('userbookcourse/{idCourse}/{keyBookCourse}', 'VideoController@index')
    ->middleware('checkBookCourse');

Route::get('cart', 'CartController@index');


Route::get('destroyitem/{id}', 'CartController@destroyitem');
Route::delete('destroyall', 'CartController@destroyall');
Route::get('destroycheckout', 'CartController@destroycheckout');
Route::get('updatecart/{id}', 'CartController@update');
Route::patch('updatecart/{id}', 'CartController@update');

Route::get('wishlist/{id}', 'wishListController@store');
Route::get('wishlist', 'wishListController@wishList');
Route::delete('wishlist/{id}', 'wishListController@destroy');

Route::get('book/tag/{id}', 'BookController@bookTag');
Route::get('book/author/{id}', 'BookController@bookAuthor');
Route::get('book/{id}', 'BookController@index');
Route::get('book', 'BookController@index');


Route::get('addcart/{id}', 'BookController@addcart');
Route::post('updatecart/{id}', 'CartController@update');
Route::get('book/{id}/{slug}', 'BookController@detailBook');
Route::post('book/{id}/{slug}', 'BookController@detailBook');


Route::get('coursecart/{id}', 'CourseController@courseCart');
Route::get('course', 'CourseController@index');
Route::get('course/{id}', 'CourseController@index');
Route::get('course/tag/{id}', 'CourseController@courseTag');
Route::get('course/{id}/{slug}', 'CourseController@detailCourse');
Route::post('course/{id}/{slug}', 'CourseController@detailCourse');
Route::get('order', 'OrderController@getorder');
Route::post('order', 'OrderController@postorder');

Route::get('batch/{id}', 'BatchController@index');
Route::get('batch', 'BatchController@index');
Route::get('batchcart/{id}', 'BatchController@batchCart');
Route::get('batch/{id}/{key?}', 'BatchController@test');
//Route::post('batch/{id?}/{key?}', 'BatchController@test');

Route::get('usertest/{batch_id}/{id}/{slug}','TestController@index')->middleware('CheckTest');
Route::post('usertest/{batch_id}/{id}/{slug}','TestController@Score');

Route::get('room/{id}','RoomController@index');
Route::get('room','RoomController@index');
Route::get('room/joinTest/{idt}/{idr}','RoomController@joinTest');
Route::get('room/cart/{idt}/{idr}','RoomController@roomCart');

Route::get('search', 'HomeController@search');
Route::get('checkout/{id}', 'OrderController@checkout');
Route::delete('destroycheckout/{id}', 'OrderController@deletecheckout');

Route::post('subcribe', 'HomeController@subcribe');

Route::get('about', 'HomeController@about');
Route::post('log', 'MyacountController@checklogin');
Route::get('log', 'MyacountController@login');
Route::get('logout', 'MyacountController@logout');
Route::get('acount', 'MyacountController@index');
Route::get('acount/discount', 'MyacountController@discount');
Route::get('acount/coin', 'MyacountController@coin');
Route::get('acount/report', 'MyacountController@report');
Route::get('acount/notification', 'MyacountController@notification');
Route::get('acount/examCourse', 'MyacountController@examCourse');
Route::get('acount/bookCourse', 'MyacountController@bookCourse');
Route::post('acount/bookCourse', 'MyacountController@bookCourse');
Route::post('acount/updateMenber', 'MyacountController@updateMenber');

Route::get('/user/active/{actived_code}', 'Auth\RegisterController@userActive');

Route::get('auth/facebook', 'Auth\RegisterController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\RegisterController@handleProviderCallback');

Route::post('lien-he', 'ContactController@contact');
Route::get('pdfview', array('as' => 'pdfview', 'uses' => 'DownloadController@pdfview'));

Route::post('question/reporting', 'TestController@reporting');




























































































































