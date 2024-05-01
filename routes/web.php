<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\LanguageController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/aboutme', function () {
    return view('aboutme');
});

Route::get('/contact', [ContactController::class, 'show']);
Route::post('/contact', [ContactController::class, 'handleForm']);




Route::get('/language', [LanguageController::class, 'index']);


Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');

// Add a name to the route for easy reference

Route::get('/projects/filter', [ProjectController::class, 'filterByLanguage']);


require __DIR__ . '/auth.php';
