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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('master','FranchiseController@master');
Route::get('add','FranchiseController@add');
Route::post('/curds','FranchiseController@save');
Route::get('display','FranchiseController@display');
Route::get('/curds/show/{id}','FranchiseController@show');
Route::get('/curds/edit/{id}','FranchiseController@edit');
Route::post('/curds/update','FranchiseController@update');
Route::get('/curds/delete/{id}','FranchiseController@delete');

Route::get('adds','StudentController@adds');
Route::post('/student','StudentController@save');
Route::get('displays','StudentController@displays');
Route::get('/student/shows/{id}','StudentController@shows');
Route::get('/student/edits/{id}','StudentController@edits');
Route::post('/student/update','StudentController@update');
Route::get('/student/delete/{id}','StudentController@delete');

Route::get('feetable','FeesController@feetable');
Route::get('/curds/addfee/{id}','FeesController@addfee');
Route::post('/store','FeesController@updatefee');
Route::get('showfee','FeesController@showfee');

Route::get('/allstudent','FranchiseController@allstudent');

Route::get('viewcertificate','FranchiseController@viewcertificate');
Route::get('/data/addcertificate/{id}','FranchiseController@addcertificate');
Route::post('/savecertificate','FranchiseController@savecertificate');
Route::get('showcertificate','StudentController@showcertificate');

Route::get('myprofile','StudentController@myprofile');


