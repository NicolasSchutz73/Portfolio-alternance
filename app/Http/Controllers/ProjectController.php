<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProjectController extends Controller
{
    public function show()
    {
        $projects = Project::all();
        return Inertia::render('Home', ['projects' => $projects]);
    }
}
