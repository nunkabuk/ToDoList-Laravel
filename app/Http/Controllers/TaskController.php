<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Category;

class TaskController extends Controller
{
    public function index()
    {
    $tasks = Task::all();
    $categories=Category::all();
        return view('tasks.index',['tasks' => $tasks,'categories'=>$categories]);


    }

public function create()
   {
     $categories=Category::all();
  return view('tasks.create',['categories'=>$categories]);
   }

 public function save(Request $request)
{
  # code..
  $this->validate($request,[
    'titre'=>'required|max:100',
  ]);

  $task= new Task();
  $task->titre=$request->input('titre');
  $task->category_id=$request->input('category_id');
  $task->save();

return redirect('/tasks');

}

public function show($id)
    {
       $task=Task::find($id);
        return view('tasks.show', ['task' => $task]);
    }

public function edit($id)
        {
         $task=Task::find($id);
         return view('tasks.edit', ['task' => $task]);
        }

public function update($id,Request $request)
        {
    $task =Task::find($id);
    $task->titre = $request->input('titre');
    $task->save();

    return redirect('/tasks');
        }
public function delete($id)
      {
$task = Task::find($id);
$task->delete();
    return redirect('/tasks');
      }
public function check($id)
      {
    $task =Task::find($id);
    $task->do = 1;
    $task->save();

  return redirect('/tasks');
}

}
