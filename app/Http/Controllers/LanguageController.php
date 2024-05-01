<?php

namespace App\Http\Controllers;

use App\Models\Language; // Ensure you have a Language model
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function index()
    {
        $languages = Language::all(); // Fetch all languages from the database
        return view('language', compact('languages')); // Pass them to the view
    }
}
