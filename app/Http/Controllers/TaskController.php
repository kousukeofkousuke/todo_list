<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

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
    
    public function create()
    {
        return view('tasks/create');
    }
    
    public function store(Request $request, Task $task)
    {
        $input = $request['task'];
        $task->fill($input)->save();
        return redirect('/tasks/' . $task->id);
    }
}
