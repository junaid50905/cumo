<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\EmployeeRequisitionRepository;
use Livewire\Component;
use Livewire\WithPagination;

class EmployeeRequisitionList extends Component
{
    use WithPagination,CommonListElements;

    protected string $destroyRoute = 'employee-requisition.destroy';
    private EmployeeRequisitionRepository $employeeRepo;

    public function boot(EmployeeRequisitionRepository $employeeRepo)
    {
        $this->employeeRepo = $employeeRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->employeeRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }
    
    public function render()
    {
        $data = [
            'records' => $this->employeeRepo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.employee-requisition-list',$data);
    }
}
