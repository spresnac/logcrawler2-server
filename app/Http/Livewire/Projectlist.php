<?php

namespace App\Http\Livewire;

use App\Models\Projects;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithPagination;

class Projectlist extends Component
{
    use WithPagination;

    public string $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render(): View
    {
        $pagenate_number = 12;
        $projects = Projects::with(['user:id,name']);
        $projects = ($this->search === '')
            ? $projects->paginate($pagenate_number)
            : $projects->where(function (Builder $query) {
                $query->where('name', 'LIKE', '%'.$this->search.'%');
            })->paginate($pagenate_number);

        return view('livewire.projectlist', [
            'projects' => $projects,
        ]);
    }
}
