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
    public int $level = 0;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $pagenate_number = 99;
        $logs = $this->project->logs();
        if ($this->search !== '') {
            $logs = $logs->where(function (Builder $query) {
                $query->where('message', 'LIKE', '%' . $this->search . '%');
            });
        }
        if ($this->level > 0) {
            $logs = $logs->where('level', '=', $this->level);
        }
        return view('livewire.logs', [
            'logs' => $logs->paginate($pagenate_number),
        ]);
    }
}
