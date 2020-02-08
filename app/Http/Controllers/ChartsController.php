<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Project;
use App\Charts\numberOfProjectsByMonth;

class ChartsController extends Controller
{
    public function index() {

        // Pull the project data from the database

        $projectsData = User::select('created_at')->format('M')->orderBy('created_at', 'asc')->get();
    
        $projects = collect($projectsData);
        // Create a new chart
        $chart = new numberOfProjectsByMonth;

        // Create the labels for the chart
        $chart->labels(['January', 'February', 'March']);

        // Create a dataset for the chart
        $chart->dataset('New projects per month', 'line', $projects);

        // Pass the chart to the view

        return view('sample_view', ['chart' => $chart]));
    }
}
