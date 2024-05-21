<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\PrescriptionRepository;
use App\Http\Livewire\Traits\CommonListElements;

class PrescriptionList extends Component
{
    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'prescription.destroy';
    private PrescriptionRepository $repo;
    public function boot(PrescriptionRepository $repository)
    {
        $this->repo = $repository;
    }

    public function toggleApprove($recordId)
    {
        $this->repo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }
    public function render()
    {
        $data = [
            'records' => $this->repo->getListData($this->perPage, $this->search)
        ];
        return view('livewire.prescription-list', $data);
    }
}
