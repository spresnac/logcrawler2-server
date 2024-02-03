<?php

namespace App\Http\Livewire;

use App\Models\Projects;
use Carbon\Carbon;
use Livewire\Component;

class ProjectEdit extends Component
{
    public Projects $project;

    public string $name;
    public string $key;
    public bool $archived;

    public function mount()
    {
        $this->name = $this->project->name;
        $this->key = $this->project->key;
        $this->archived = ($this->project->archived_at !== null);
    }

    public function editForm()
    {
        $this->project->update([
            'name' => $this->name,
            'archived_at' => ($this->archived)
                ? ($this->project->archived_at === null) ? Carbon::now() : $this->project->archived_at
                : null,
        ]);
        session()->flash('flash.banner', __('project.edited'));
        session()->flash('flash.bannerStyle', 'success');
        return redirect(
            to: route('dashboard'),
            status: 200
        );
    }

}
