<?php

namespace App\Http\Controllers;

use App\Models\Projects;

class ProjectsController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function create()
    {
        return view('projects.create', [
            'project' => new Projects(['key' => null]),
        ]);
    }

    public function edit(Projects $project)
    {
        return view('projects.edit', ['project' => $project]);
    }

    public function show(Projects $project)
    {
        return view('projects.show', ['project' => $project]);
    }
}
