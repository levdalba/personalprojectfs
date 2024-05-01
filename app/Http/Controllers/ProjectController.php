<?php

namespace App\Http\Controllers;


use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $languageId = $request->input('language_id');

        if ($languageId) {
            $projects = Project::whereHas('languages', function ($query) use ($languageId) {
                $query->where('id', $languageId);
            })->with('languages')->orderBy('id', 'desc')->get();
        } else {
            $projects = Project::with('languages')->orderBy('id', 'desc')->get();
        }

        return view('projects.index', compact('projects'));
    }



    public function filterByLanguage(Request $request)
    {
        $languageId = $request->input('language_id');

        if ($languageId) {
            // Explicitly specify the table name in where clauses
            $projects = Project::whereHas('languages', function ($query) use ($languageId) {
                $query->where('languages.id', '=', $languageId);
            })->with('languages')->orderBy('projects.id', 'desc')->get();
        } else {
            $projects = Project::with('languages')->orderBy('projects.id', 'desc')->get();
        }

        return view('projects.index', compact('projects'));
    }








}







