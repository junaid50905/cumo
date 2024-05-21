<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\AssignInterviewerRepository;

class AssignInterviewerList extends Component
{
    use WithPagination, CommonListElements;
    private AssignInterviewerRepository $repo;

    protected string $destroyRoute = 'assign-interviewer.destroy';

    public function boot(AssignInterviewerRepository $repository)
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
        return view('livewire.assign-interviewer-list' ,$data);
    }
}
