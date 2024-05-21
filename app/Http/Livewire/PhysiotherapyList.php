<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\PhysiotherapyRepository;
use App\Http\Livewire\Traits\CommonListElements;

class PhysiotherapyList extends Component
{
    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'physiotherapy.destroy';
    private PhysiotherapyRepository $physioTherapyRepo;
    public $reportList;

    public function boot(PhysiotherapyRepository $physioTherapyRepo)
    {
        $this->physioTherapyRepo = $physioTherapyRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->physioTherapyRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }
    public function render()
    {
         $data = [
            'records' => $this->physioTherapyRepo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.physiotherapy-list',$data);
    }
}
