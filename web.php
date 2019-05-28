<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
}) ->name('Login');

Route::get('formwrap', function () {
    return view('studentfrontend.studentindex');
});

Route::get('studentupdate', function () {
    return view('studentfrontend.update');
});
Route::get('view', function () {
    return view('studentfrontend.guview');
});
Route::get('studentindex', function () {
    return view('studentfrontend.studentindex');
});
Route::get('test', function () {
    return view('studentfrontend.test');
});


Route::get('studentgrievance', function () {
    return view('studentfrontend.grievance');
});

Route::get('admingrievance', function () {
    return view('adminfrontend.gu');
});

Route::get('adminstory', function () {
    return view('adminfrontend.adminstory');
});

Route::get('adminteam', function () {
    return view('adminfrontend.team');
});

Route::get('admin', function () {
    return view('adminfrontend.adminstory');
});

Route::get('teamedit', function () {
    return view('adminfrontend.teamedit');
});
Route::resource('studentupdate', 'TaskController');
Route::resource('studentgrievance', 'TaskController');
Route::resource('tasks', 'TaskController');


Route::post('/comment/store', 'CommentController@store')->name('comment.add');
Route::post('/reply/store', 'CommentController@replyStore')->name('reply.add');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('studentfrontend.studentindex');


Route::get('/admin', 'AdminController@index') ;
return redirect("studentfrontend.studentindex");

Route::get('/student', 'StudentController@index');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

