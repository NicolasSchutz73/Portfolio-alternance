<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProjectController extends Controller
{
    public function show()
    {
        $webProjects = Project::where('type', 'Projet web')->get();
        $mobileProjects = Project::where('type', 'Projet mobile')->get();
        $softwareProjects = Project::where('type', 'Projet logiciel')->get();
        $hobbies = Project::where('type', 'Hobbies')->get();

        return Inertia::render('Home', [
            'webProjects' => $webProjects,
            'mobileProjects' => $mobileProjects,
            'softwareProjects' => $softwareProjects,
            'hobbies' => $hobbies,
        ]);
    }

    public function detail(Project $project) // Route Model Binding
    {
        return Inertia::render('ProjectDetail', ['project' => $project]);
    }
}
