<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\SensoryChecklistAdultRepository;

class SensoryCheckListAdultList extends Component
{
    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'sensory-checklist-adult.destroy';
    private SensoryChecklistAdultRepository $sensoryChecklistAdultRepo;
    public $reportList;

    public function boot(SensoryChecklistAdultRepository $sensoryChecklistAdultRepo)
    {
        $this->sensoryChecklistAdultRepo = $sensoryChecklistAdultRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->sensoryChecklistAdultRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }

    public function delete($id)
    {
        $this->sensoryChecklistAdultRepo->delete($id);
        $this->dispatchBrowserEvent('notify', 'Deleted');
    }

    public function render()
    {
        $data = [
            'records' => $this->sensoryChecklistAdultRepo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.sensory-check-list-adult-list', $data);
    }
}
