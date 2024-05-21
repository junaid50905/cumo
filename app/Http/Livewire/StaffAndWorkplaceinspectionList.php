<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\StaffAndWorkplaceinspectionRepository;

class StaffAndWorkplaceinspectionList extends Component
{
    use WithPagination, CommonListElements;
    private StaffAndWorkplaceinspectionRepository $staffAndWorkplaceRepo;
    public $reportList;
    protected string $destroyRoute = 'staff-and-workplaceinspection.destroy';
    public function boot(StaffAndWorkplaceinspectionRepository $staffAndWorkplaceRepo)
    {
        $this->staffAndWorkplaceRepo = $staffAndWorkplaceRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->staffAndWorkplaceRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }

    public function render()
    {
         $data = [
            'records' => $this->staffAndWorkplaceRepo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.staff-and-workplaceinspection-list',$data);
    }
}
