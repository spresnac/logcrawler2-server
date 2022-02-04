<?php

namespace App\Http\Livewire;

use App\Models\Projects;
use Livewire\Component;

class ProjectEdit extends Component
{
    public Projects $project;

    public string $name;
    public string $key;

    public function mount()
    {
        $this->name = $this->project->name;
        $this->key = $this->project->key;
    }

    public function editForm()
    {
        $this->project->update([
            'name' => $this->name
        ]);
        session()->flash('flash.banner', __('project.edited'));
        session()->flash('flash.bannerStyle', 'success');
        return redirect(
            to: route('dashboard'),
            status: 200
        );
    }

}
