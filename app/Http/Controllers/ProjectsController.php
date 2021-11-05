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

    public function store(Request $request)
    {
        dd($request->all());
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
