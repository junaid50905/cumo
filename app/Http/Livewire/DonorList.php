<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\DonorRepository;
use App\Http\Livewire\Traits\CommonListElements;

class DonorList extends Component
{
    use WithPagination, CommonListElements;

    private DonorRepository $donorRepo;
    public $reportList;
    protected string $destroyRoute = 'donor.destroy';

    public function boot(DonorRepository $donorRepo)
    {
        $this->donorRepo = $donorRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->donorRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }
    public function render()
    {
        $data = [
            'records' => $this->donorRepo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.donor-list', $data);
    }
}
