<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $project = Project::all();

        return view('project', ['project' => $project]);
    }

    public function create()
    {
        return view('addproject');
    }

    public function store(Request $request)
    {
        $request->validate([
            'project' => 'required',
            'name' => 'required',
            'price' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'status' => 'required',
        ]);

        $data = [
            'project' => $request->input('project'),
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'status' => $request->input('status'),
        ];

        Project::create($data);

        return redirect()->route('project')->with('success', 'Project Sukses Dibuat!');
    }

    public function edit($id)
    {
        $project = Project::find($id);

        return view('editproject', ['project' => $project]);

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'project' => 'required',
            'name' => 'required',
            'price' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'status' => 'required',
        ]);

        $project = Project::findOrFail($id);

        $project->project = $request->input('project');
        $project->name = $request->input('name');
        $project->price = $request->input('price');
        $project->start_date = $request->input('start_date');
        $project->end_date = $request->input('end_date');
        $project->status = $request->input('status');

        $project->save();

        return redirect()->route('project')->with('success', 'Kamar Sukses Diupdate!');
    }

    public function destroy($id)
    {
        Project::destroy($id);

        return redirect()->route('project')->with('success', 'Project Sukses Dihapus!');
    }
}
