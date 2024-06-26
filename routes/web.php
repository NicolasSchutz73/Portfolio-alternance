<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', function () {
    return Inertia::render('WhoIsWatching');
});

Route::get('/home', [ProjectController::class, 'show']);
Route::get('/projects/{project}', [ProjectController::class, 'detail'])->name('projects.detail');
