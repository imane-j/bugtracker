<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Project;
use App\User;
use App\Issue;
use App\Status;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request) {        
        return view('dashboard', [
            'user_info' => $request->user(),
            'users_count' => User::count(),
            'new_users_current_month' => User::whereMonth('created_at','02')->count(),
            'issues_count' => Issue::count(),
            'projects_count' => Project::count(),
            'projects' => Project::latest()->paginate(6),
            'statuses' => Status::select('id', 'name')->get(),
            'issues' => Issue::latest()->paginate(6)
        ]);
    }

}
