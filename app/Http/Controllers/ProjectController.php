<?php

namespace App\Http\Controllers;


use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('languages')->orderBy('id', 'desc')->get();
        return view('projects.index', compact('projects'));
    }

    public function getByLanguage($languageId)
    {
        $projects = Project::whereHas('languages', function ($query) use ($languageId) {
            $query->where('id', $languageId);
        })->get();

        return response()->json($projects);
    }

    public function filterByLanguage(Request $request)
    {
        $languageId = $request->language_id;
        $projects = Project::whereHas('languages', function ($query) use ($languageId) {
            $query->where('id', $languageId);
        })->get();

        return response()->json($projects);
    }

}
