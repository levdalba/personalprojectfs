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
        $language = null;

        if ($languageId) {
            $language = Language::find($languageId);
            $projects = Project::whereHas('languages', function ($query) use ($languageId) {
                $query->where('languages.id', $languageId);
            })->with('languages')->get();
        } else {
            $projects = Project::with('languages')->get();
        }

        return view('projects.index', [
            'projects' => $projects,
            'language' => $language ? $language->title : null, // Pass language title if exists
        ]);
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







