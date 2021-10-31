<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Projects::get();
        return view('dashboard', [
            'projects' => $projects
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Projects $projects)
    {
        //
    }

    public function edit(Projects $projects)
    {
        //
    }

    public function update(Request $request, Projects $projects)
    {
        //
    }

    public function destroy(Projects $projects)
    {
        //
    }
}
