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
    return view('welcome');
});
Route::get('/dash', function () {
    return view('dash');
});
Route::get('/dash_parent', function () {
    return view('dash_parent');
});
Route::get('/admin/dash', function () {
    return view('admin.dash');
});
Route::get('/admin/student', function () {
    return view('admin.student');
});
Route::get('/admin/teachers', function () {
    return view('/admin/teachers');
});
Route::get('/admin/parents', function () {
    return view('/admin/parents');
});
Route::get('/admin/courses', function () {
    return view('/admin/courses');
});
Route::get('/admin/subjects', function () {
    return view('/admin/subjects');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/students', 'StudentController@index')->middleware('checkrole');

