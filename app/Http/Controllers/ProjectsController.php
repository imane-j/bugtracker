<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Status;
use App\User;


class ProjectsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {

        return view('projects.index', [
            'projects' =>  Project::latest()->get(),
            'statuses' => Status::select('id', 'name')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create()
    {
        return view('projects.create', [
            'statuses' => Status::all(),
            'users' => User::select('id','username')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
       request()->validate([
           'project-name' => 'required',
           'project-description' => 'required',
           'status' => 'required'
       ]);

       Project::create([
           'name' => request('project-name'),
           'description' => request('project-description'),
           'status' => request('status')
       ]);
        // Redirect to the full list of projects
        return redirect(route('projects.index'))->with('success','Your project has been added to the list!');
    }

    /**
     * Display the specified resource.
     *
     *
     */
    public function show(Project $project)
    {
        return view('projects.show', [
            'project' => $project,
            'status' => Status::where('id', $project->status)->firstOrFail()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     *
     */
    public function edit(Project $project)
    {
        return view('projects.edit', [
            'project' => $project,
            'statuses' => Status::select('id', 'name')->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     *
     */
    public function update(Project $project)
    {
        // Persist new changes to the database
        $project->update($this->validateProject());

        // Redirect to the project page
        return redirect(route('projects.index'))->with('success','Your project has been successfully edited!');

    }

    /**
     * Remove the specified resource from storage.
     *
     *
     */
    public function destroy(Project $project)
    {
        $project = Project::where('id', $project->id);
        $project->delete();

        return redirect(route('projects.index'))->with('success', 'Your project has been successfully deleted!');

    }


    /**
     * @return mixed
     */
    public function validateProject()
    {
        return request()->validate([
            'name' => 'required',
            'description' => 'required',
            'status' => 'exists:statuses,id'
        ]);
    }
}
