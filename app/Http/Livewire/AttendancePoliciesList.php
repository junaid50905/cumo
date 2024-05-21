<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\AttendancePolicyRepository;

class AttendancePoliciesList extends Component
{
    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'attendance-policy.destroy';
    private AttendancePolicyRepository $repo;

    public function boot(AttendancePolicyRepository $repo)
    {
        $this->repo = $repo;
    }

    public function toggleApprove($recordId)
    {
        $this->repo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }

    public function delete($id)
    {
        $this->repo->delete($id);
        $this->dispatchBrowserEvent('notify', 'Deleted');
    }
    public function render()
    {
        $data = [
            'records' => $this->repo->getListData($this->perPage, $this->search)
        ];
        return view('livewire.attendance-policies-list',$data);
    }
}
