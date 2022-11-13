<?php

namespace App\Http\Controllers;

use App\Task;
use App\Category;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index(Task $task)
    {
        return view('tasks/index')->with(['tasks' => $task->getPaginateByLimit()]);
    }
    
    public function show(Task $task)
    {
        return view('tasks/show')->with(['task' => $task]);
    }
    
    public function store(Request $request, Task $task)
    {
        $input = $request['task'];
        $task->fill($input);
        $task->user_id=Auth::id();
        $task->save();
        return redirect('/tasks/'. $task->id);
    }
    
    public function edit(Task $task)
    {
        return view('tasks/edit')->with(['task' => $task]);
    }
    
    public function state(Task $task)
    {
        return view('tasks/state')->with(['task' => $task]);
    }
    
    public function update(Request $request, Task $task)
    {
        $input = $request['task'];
        $task->fill($input)->save();
        return redirect('/tasks/' . $task->id);
    }

    public function create(Category $category,User $user)
    {
        return view('tasks/create',compact('user'))->with(['categories' => $category->get()]);
    }
}