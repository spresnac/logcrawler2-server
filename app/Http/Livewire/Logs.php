<?php

namespace App\Http\Livewire;

use App\Models\Projects;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithPagination;

class Logs extends Component
{
    use WithPagination;

    public Projects $project;
    public string $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $pagenate_number = 99;
        $logs = $this->project->logs();
        $logs = ($this->search === '')
            ? $logs->paginate($pagenate_number)
            : $logs->where(function (Builder $query) {
                $query->where('message', 'LIKE', '%'.$this->search.'%');
            })->paginate($pagenate_number);

        return view('livewire.logs', [
            'logs' => $logs,
        ]);
    }
}
