<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Illuminate\Http\Request;

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

    public function destroy(Projects $projects)
    {
        //
    }
}
