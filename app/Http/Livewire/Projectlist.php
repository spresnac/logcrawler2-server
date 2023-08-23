<?php

namespace App\Http\Livewire;

use App\Models\Projects;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithPagination;

class Projectlist extends Component
{
    use WithPagination;

    public string $search = '';
    public string $order_by = 'projects.id';
    public string $order_direction = 'ASC';

    public array $order_direction_method = [
        'ASC' => 'orderBy',
        'DESC' => 'orderByDesc',
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render(): View
    {
        $pagenate_number = 12;
        $projects = Projects::query()
            ->distinct()
            ->addSelect('logs.created_at')
            ->leftJoin(
                'logs',
                'logs.project_id',
                '=',
                'projects.id',
            )
            ->with(['user:id,name'])
            ->{$this->order_direction_method[$this->order_direction]}($this->order_by);

        $projects = ($this->search === '')
            ? $projects->paginate($pagenate_number)
            : $projects->where(function (Builder $query) {
                $query->where('name', 'LIKE', '%'.$this->search.'%');
            })->paginate($pagenate_number);

        return view('livewire.projectlist', [
            'projects' => $projects,
        ]);
    }

    public function order_by($order_field, $order_direction = 'ASC')
    {
        $this->order_by = $order_field;
        if (array_key_exists($order_direction, $this->order_direction_method)) {
            $this->order_direction = $order_direction;
        }
    }
}
