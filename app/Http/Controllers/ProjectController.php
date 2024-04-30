<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('languages')->orderBy('id', 'desc')->get();
        return view('projects.index', compact('projects'));
    }
}
