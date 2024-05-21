<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\DesignationSetupRepository;

class DesignationSetupList extends Component
{
    use WithPagination, CommonListElements;
    protected string $destroyRoute ='designation.destroy';
    private DesignationSetupRepository $designationSetupRepo;
    public $reportList;

    public function boot(DesignationSetupRepository $designationSetupRepo){
        $this->designationSetupRepo = $designationSetupRepo;
    }
    public function toggleApprove($recordId){
        $this->designationSetupRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }
    public function render()
    {
        $data= ['records' => $this->designationSetupRepo->getListData($this->perPage, $this->search)];
        return view('livewire.designation-setup-list' ,$data);
    }
}
