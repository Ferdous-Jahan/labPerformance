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

Route::get('/teacher', 'TeacherController@index');
Route::get('/teacher/{id}', 'TeacherController@show')->name('show');
Route::get('/teacher/edit/{id}', 'TeacherController@edit')->name('edit');
Route::post('/teacher/edit/{id}', 'TeacherController@update');
Route::get('/teachercreate', 'TeacherController@create')->name('create');
Route::post('/teachercreate', 'TeacherController@store');
Route::get('/teacherdelete/{id}', 'TeacherController@destroy')->name('delete');