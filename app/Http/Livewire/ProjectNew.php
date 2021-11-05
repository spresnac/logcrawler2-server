<?php

namespace App\Http\Livewire;

use App\Repositories\ProjectRepository;
use Livewire\Component;

class ProjectNew extends Component
{
    public $projectname;

    public function createForm()
    {
        $project_repository = app(ProjectRepository::class);
        $new_project = $project_repository->createProject($this->projectname);
        session()->flash('flash.banner', __('project.created', [
            'project_id' => $new_project->id,
            'project_key' => $new_project->key,
        ]));
        session()->flash('flash.bannerStyle', 'success');
        return redirect(
            to: route('dashboard'),
            status: 201
        );
    }

    public function render()
    {
        return view('livewire.projectnew');
    }
}
