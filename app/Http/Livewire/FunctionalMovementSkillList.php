<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\FunctionalMovementSkillRepository;

class FunctionalMovementSkillList extends Component
{
    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'functional-movement-skill.destroy';
    private FunctionalMovementSkillRepository $functionalMovementSkillRepo;
    public $reportList;

    public function boot(FunctionalMovementSkillRepository $functionalMovementSkillRepo)
    {
        $this->functionalMovementSkillRepo = $functionalMovementSkillRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->functionalMovementSkillRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }


    public function delete($id)
    {
        $this->functionalMovementSkillRepo->delete($id);
        $this->dispatchBrowserEvent('notify', 'Deleted');
    }

    public function render()
    {
        $data = [
            'records' => $this->functionalMovementSkillRepo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.functional-movement-skill-list', $data);
    }
}
