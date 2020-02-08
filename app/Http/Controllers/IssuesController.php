<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Project;
use App\Issue;
use App\Priority;
use App\User;
use App\Status;
use App\Type;


class IssuesController extends Controller
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
        return view('issues.index', [
            'issues' => Issue::latest()->get(),
            'projects' => Project::select('id', 'name')->get(),
            'priorities' => Priority::select('id', 'name')->get(),
            'types' => Type::select('id', 'name')->get(),
            'statuses' => Status::select('id', 'name')->get(),
            'users' => User::select('id', 'username', 'user_image')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create()
    {
        return view('issues.create', [
            'projects' => Project::select('id', 'name')->get(),
            'priorities' => Priority::select('id', 'name')->get(),
            'types' => Type::select('id', 'name')->get(),
            'statuses' => Status::select('id', 'name')->get(),
            'users' => User::select('id', 'username', 'user_image')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     *
     */
    public function store(Request $request)
    {
        $this->validateIssues();

        Issue::create([
            'name' => request('issue-name'),
            'description' => request('issue-description'),
            'project' => request('issue-project'),
            'user' => request('issue-user'),
            'type' => request('issue-type'),
            'priority' => request('issue-priority'),
            'status' => request('issue-status')
        ]);

        // Redirect to the issues list

        return redirect(route('issues.index'))->with('success', 'Your issue has been added to the list!');
    }

    /**
     * Display the specified resource.
     *
     *
     */
    public function show(Issue $issue)
    {
        return view('issues.show', [
            'issue' => $issue,
            'project' => Project::where('id', $issue->project)->firstOrFail(),
            'priority' => Priority::where('id', $issue->priority)->firstOrFail(),
            'type' => Type::where('id', $issue->type)->firstOrFail(),
            'status' => Status::where('id', $issue->status)->firstOrFail(),
            'user' => User::where('id', $issue->user)->firstOrFail()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     *
     */
    public function edit(Issue $issue)
    {
        return view('issues.edit', [
            'issue' => $issue,
            'projects' => Project::select('id', 'name')->get(),
            'priorities' => Priority::select('id', 'name')->get(),
            'types' => Type::select('id', 'name')->get(),
            'statuses' => Status::select('id', 'name')->get(),
            'users' => User::select('id', 'username', 'user_image')->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     *
     */
    public function update(Issue $issue)
    {
        $issue->update(request()->validate([
            'name' => 'required',
            'description' => 'required',
            'type' => 'required|integer',
            'priority' => 'required|integer',
            'user' => 'required|integer',
            'project' => 'required|integer',
            'status' => 'required|integer'
        ]));

        // Redirect to the issues list
        return redirect(route('issues.index'))->with('success','Your issue has been successfully edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     *
     */
    public function destroy(Issue $issue)
    {
        $issue = Issue::where('id', $issue->id);
        $issue->delete();

        // Redirect to the issues list
        return redirect(route('issues.index'))->with('success', 'Your issue has been successfully deleted!');
    }

    public function validateIssues() {
        return request()->validate([
            'issue-name' => 'required',
            'issue-description' => 'required',
            'issue-type' => 'required|integer',
            'issue-priority' => 'required|integer',
            'issue-user' => 'required|integer',
            'issue-project' => 'required|integer',
            'issue-status' => 'required|integer'
        ]);
    }
}
