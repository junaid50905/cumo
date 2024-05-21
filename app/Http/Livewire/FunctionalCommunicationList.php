<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\FunctionalCommunicationRepository;

class FunctionalCommunicationList extends Component
{
    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'functional-communication.destroy';
    private FunctionalCommunicationRepository $functionalCommunicationRepo;
    public $reportList;

    public function boot(FunctionalCommunicationRepository $functionalCommunicationRepo)
    {
        $this->functionalCommunicationRepo = $functionalCommunicationRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->functionalCommunicationRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }
    public function render()
    {
        $data = [
            'records' => $this->functionalCommunicationRepo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.functional-communication-list', $data);
    }
}
