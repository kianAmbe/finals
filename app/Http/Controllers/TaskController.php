<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{

    public function index()
    {
        $tasks = Task::all();

        return view("index", ['tasks' => $tasks]);
    }

    public function saveTask(Request $request)
    {
        $data = $request->validate([
            'task' => 'required'
        ]);

        $newTask = Task::create($data);

        return back();
    }

    public function update($id)
    {

        $taskData = Task::find($id);

        return view('update', ['task' => $taskData]);
    }

    public function updateTask(Request $request, $id)
    {
        $taskData = Task::find($id);

        if ($taskData) {
            $taskData->update(['task' => $request->task]);
        }

        return redirect()->route('home');
    }

    public function deleteTask($id)
    {
        DB::delete('delete from tasks where id = ?', [$id]);

        return back();
    }
}
