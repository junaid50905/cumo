<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\LeaveTypeRepository;

class LeaveTypeList extends Component
{
    use WithPagination, CommonListElements;

    private LeaveTypeRepository $repo;
    protected string $destroyRoute = 'leave-type.destroy';

    public function boot(LeaveTypeRepository $repo)
    {
        $this->repo = $repo;
    }

    public function toggleApprove($recordId)
    {
        $this->repo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }

    public function render()
    {
        $data = [
            'records' => $this->repo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.leave-type-list',$data);
    }
}
