<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Models\Project;


class TaskController
{

    public function index()
{
    $tasks = Task::orderBy('priority')->get();
    $projects = Project::all(); // Fetch all projects

    return view('tasks.index', compact('tasks', 'projects'));
}
  
        
    public function store(Request $request)
    {
        Task::create([
            'name' => $request->name,
            'project_id' => $request->project_id, 
            'priority' => Task::max('priority') + 1, 
        ]);
    
        return redirect()->route('tasks.index')->with('success', 'Task created!');
    }
    
    

  

    
    public function update(Request $request, Task $task)
    {
        $request->validate(['name' => 'required|string|max:255']);
        $task->update(['name' => $request->name]);
        return redirect()->back();
    }


    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->back();
    }


    public function reorder(Request $request)
{
        $taskOrder = $request->order; // Array of task IDs in new order
        foreach ($taskOrder as $index => $taskId) {
            Task::where('id', $taskId)->update(['priority' => $index + 1]);
        }
        return response()->json(['success' => true]);
    }
}
