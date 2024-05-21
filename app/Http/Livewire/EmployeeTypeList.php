<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\EmplyeeTypeSetupRepository;

class EmployeeTypeList extends Component
{

    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'employee-type.destroy';
    private EmplyeeTypeSetupRepository $employee;


    public function boot(EmplyeeTypeSetupRepository $employee)
    {
        $this->employee = $employee;
    }

    public function toggleApprove($recordId)
    {
        $this->employee->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }

    public function render()
    {
        $data = [
            'records' => $this->employee->getListData($this->perPage, $this->search),
      ];
        return view('livewire.employee-type-list',$data);
    }
}
