<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\AutisumBehaviourRepository;

class AutisumBehibehaviourList extends Component
{
    protected string $destroyRoute = 'autisum-behaviour.destroy';
    use WithPagination, CommonListElements;
    private AutisumBehaviourRepository $AutisumBehaviourRepo;
    public $reportList;
    public function boot(AutisumBehaviourRepository $AutisumBehaviourRepo)
    {
        $this->AutisumBehaviourRepo = $AutisumBehaviourRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->AutisumBehaviourRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }

    public function delete($id)
    {
        $this->AutisumBehaviourRepo->delete($id);
        $this->dispatchBrowserEvent('notify', 'Deleted');
    }

    public function render()
    {
        $data = [
            'records' => $this->AutisumBehaviourRepo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.autisum-behibehaviour-list', $data);
    }
}
