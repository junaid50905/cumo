<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\SensoryChecklistChildRepository;

class SensoryCheckListChildList extends Component
{
    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'sensory-checklist-child.destroy';

    private SensoryChecklistChildRepository $sensoryCheckListChildRepo;
    public $reportList;

    public function boot(SensoryChecklistChildRepository $sensoryCheckListChildRepo)
    {
        $this->sensoryCheckListChildRepo = $sensoryCheckListChildRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->sensoryCheckListChildRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }

    public function render()
    {
        $data = [
            'records' => $this->sensoryCheckListChildRepo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.sensory-check-list-child-list', $data);
    }
}
