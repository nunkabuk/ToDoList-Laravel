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


Route::get('tasks', 'TaskController@index');
Route::get('tasks/create', 'TaskController@create');
Route::post('tasks/save', 'TaskController@save');
Route::get('tasks/show/{id}','TaskController@show');
Route::get('tasks/show/{id}/edit','TaskController@edit');
Route::post('tasks/update/{id}','TaskController@update');
Route::get('tasks/delete/{id}', 'TaskController@delete');
Route::get('tasks/check/{id}', 'TaskController@check');
Route::get('categories', function () {
    $categories=App\Category::find(1);
    $task=new App\Task;
    $task->category_id=$categories->id;
  $task->save();
 dd([$task=$categories->$task]);
  });
