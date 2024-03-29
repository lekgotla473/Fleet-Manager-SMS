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


Route::get('/', function () {
    return view('welcome');
});
*/

Auth::routes();

Route::get('home',"HomeController@index") ;
Route::get('/',"HomeController@index") ;
Route::get('/',"StudentController@index") ;


Route::get('fleet',"StudentController@index") ;
Route::get('/edit/{id}',"StudentController@edit") ;
Route::get('/show/{id}',"StudentController@show") ;
Route::get('/create',"StudentController@create") ;
Route::post('/store',"StudentController@store") ;
Route::post('/update/{id}',"StudentController@update") ;







//Route::get('/home', 'HomeController@index');
//Route::get('/student', 'StudentController@index')->name('student');

//Route::get('/home', 'HomeController@index')->name('home');



