<?php

use Illuminate\Support\Facades\Route;

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

Route::get('loginpage','Admincontrol@adminlogin');
Route::post('islogin','Admincontrol@adminloged');
Route::get('dashboard','Admincontrol@dashboard');

Route::get('studentregisterform','Studentcontrol@create');
Route::post('studentstore','Studentcontrol@store');
Route::get('studentdetails','Studentcontrol@show');
Route::get('/student_edit/{id}',['as'=>'student.edit', 'uses'=>'Studentcontrol@edit']);
Route::post('/student_update/{id}',['as'=>'student.update', 'uses'=>'Studentcontrol@update']);
Route::get('/student_delete/{id}',['as'=>'student.delete', 'uses'=>'Studentcontrol@destroy']);

/*Route::post('student/courses','Studentcontrol@courses');*/
Route::get('addbranch','Branchcontrol@create');
Route::post('branchstore','Branchcontrol@store');
Route::get('branchshow','Branchcontrol@show');
Route::get('/branch_edit/{id}',['as'=>'branch.edit', 'uses'=>'Branchcontrol@edit']);
Route::post('/branch_update/{id}',['as'=>'branch.update', 'uses'=>'Branchcontrol@update']);
Route::get('/branch_delete/{id}',['as'=>'branch.delete', 'uses'=>'Branchcontrol@destroy']);

Route::get('addcourse','Coursecontrol@create');
Route::post('coursestore','Coursecontrol@store');
Route::get('courseshow','Coursecontrol@show');

// SearchBar
Route::get('/search','Studentcontrol@search');

// Check Box
Route::post('/checkbox','Studentcontrol@show');







