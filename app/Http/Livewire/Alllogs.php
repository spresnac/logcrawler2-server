<?php

namespace App\Http\Livewire;

use App\Models\Projects;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithPagination;

class Alllogs extends Component
{
    use WithPagination;

    public string $search = '';
    public int $level = 0;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $pagenate_number = 100;
        $projectids = Projects::query()->select('id')->get();
        $logs = \App\Models\Logs::query()
            ->withoutGlobalScope('default_sort')
            ->with('project')
            ->whereIn('project_id', $projectids)
            ->orderByDesc('logged_at');
        if ($this->search !== '') {
            $logs = $logs->where(function (Builder $query) {
                $query->where('message', 'LIKE', '%' . $this->search . '%');
            });
        }
        if ($this->level > 0) {
            $logs = $logs->where('level', '=', $this->level);
        }
        return view('livewire.alllogs', [
            'logs' => $logs->paginate($pagenate_number),
        ]);
    }
}
