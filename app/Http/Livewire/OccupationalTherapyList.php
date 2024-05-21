<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\OccupationalTherapyRepository;

class OccupationalTherapyList extends Component
{
    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'occupational-therapy.destroy';
    private OccupationalTherapyRepository $occupationTherapyRepo;
    public $reportList;

    public function boot(OccupationalTherapyRepository $occupationTherapyRepo)
    {
        $this->occupationTherapyRepo = $occupationTherapyRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->occupationTherapyRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }
    public function render()
    {
        $data = [
            'records' => $this->occupationTherapyRepo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.occupational-therapy-list', $data);
    }
}
