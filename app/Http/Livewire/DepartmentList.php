<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\DepartmentSetupRepository;
use App\Http\Livewire\Traits\CommonListElements;

class DepartmentList extends Component
{
    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'department.destroy';
    private DepartmentSetupRepository $departmentSetupRepo;

    public function boot(DepartmentSetupRepository $departmentSetupRepo)
    {
        $this->departmentSetupRepo = $departmentSetupRepo;
    }
    public function toggleApprove($recordId)
    {
        $this->departmentSetupRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }

    public function render()
    {
        $data = [
            'records' => $this->departmentSetupRepo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.department-list', $data);
    }
}
