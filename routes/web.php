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


//from the video
Route::post('/tasks', 'TasksController@store');
Route::get('/tasks/test','TasksController@test');
Route::get('/tasks','TasksController@index');
Route::get('/tasks/asc','TasksController@asc');
Route::get('/tasks/desc','TasksController@desc');
Route::get('/tasks/create', 'TasksController@create');
Route::get('/tasks/{task}', 'TasksController@show');
// keep this as is comments controlller wont work.
Route::post('/tasks/{task}/comments', 'TasksController@comment');

Route::get('/tasks/{task}/edit', 'TasksController@edit');
Route::patch('/tasks/{task}/edit', 'TasksController@update');
Route::delete('/tasks/{task}/delete', 'TasksController@destroy');
Route::get('/tasks/{task}', 'TasksController@show');

Route::get('/',function(){
    return  view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');




