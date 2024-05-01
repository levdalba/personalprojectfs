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

    public function getByLanguage($languageId)
    {
        $projects = Project::whereHas('languages', function ($query) use ($languageId) {
            $query->where('languages.id', $languageId);  // Specify the table name explicitly
        })->get();

        return response()->json($projects);
    }

    public function filterByLanguage(Request $request)
    {
        $languageId = $request->language_id;
        $projects = Project::whereHas('languages', function ($query) use ($languageId) {
            $query->where('languages.id', $languageId);  // Specify the table name explicitly
        })->get();

        return response()->json($projects);
    }






}
