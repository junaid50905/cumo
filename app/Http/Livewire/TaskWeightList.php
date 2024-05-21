<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\TaskWeightRepository;
use App\Http\Livewire\Traits\CommonListElements;

class TaskWeightList extends Component
{
    use WithPagination, CommonListElements;
    private TaskWeightRepository $repo;

    protected string $destroyRoute = 'task-weight.destroy';

    public function boot(TaskWeightRepository $repository)
    {
        $this->repo = $repository;
    }

    public function toggleApprove($recordId)
    {
        $this->repo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }

    public function render()
    {
        $data = [
            'records' => $this->repo->getListData($this->perPage, $this->search)
        ];
        return view('livewire.task-weight-list');
    }

}
