<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

// API routes
Route::get('/projects/language/{languageId}', [ProjectController::class, 'getByLanguage']);
