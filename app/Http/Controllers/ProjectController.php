<?php

namespace App\Http\Controllers;


use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Language;

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
        $languageId = $request->query('language_id');
        $language = Language::find($languageId);

        if (!$language) {
            return abort(404, 'Language not found');
        }

        $projects = $language->projects()->with('languages')->get();

        return view('projects.index', [
            'projects' => $projects,
            'language' => $language->title,  // Pass the language title to the view
        ]);
    }









}







