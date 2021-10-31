<?php

namespace App\Http\Livewire;

use App\Models\Projects;
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

    public function render()
    {
        $pagenate_number = 12;
        $projects = ($this->search === '')
            ? Projects::paginate($pagenate_number)
            : Projects::where(function (Builder $query) {
                $query->where('name', 'LIKE', '%'.$this->search.'%');
            })->paginate($pagenate_number);

        return view('livewire.projectlist', [
            'projects' => $projects,
        ]);
    }
}
