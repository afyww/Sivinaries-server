<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $task = Task::all();

        return view('task', ['task' => $task]);

    }

    public function create()
    {
        return view('addtask');
    }

    public function store(Request $request)
    {
        $request->validate([
            'task' => 'required',
            'user_id' => 'required',
            'project_id' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'status' => 'required',
        ]);

        $data = [
            'task' => $request->input('task'),
            'user_id' => $request->input('project_id'),
            'project_id' => $request->input('project_id'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'status' => $request->input('status'),
        ];

        Task::create($data);

        return redirect()->route('task')->with('success', 'Task Sukses Dibuat!');

    }

    public function edit($id)
    {
        $task = Task::find($id);

        return view('edittask', ['task' => $task]);

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'task' => 'required',
            'user_id' => 'required',
            'project_id' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'status' => 'required',
        ]);
        $task = Task::findOrFail($id);

        $task->service = $request->input('task');
        $task->user_id = $request->input('user_id');
        $task->project_id = $request->input('project_id');
        $task->start_date = $request->input('start_date');
        $task->end_date = $request->input('end_date');
        $task->status = $request->input('status');

        $task->save();

        return redirect()->route('task')->with('success', 'Task Sukses Diupdate!');

    }

    public function destroy($id)
    {
        Task::destroy($id);

        return redirect()->route('task')->with('success', 'Task Sukses Dihapus!');

    }
}
