<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\InstituteRepository;
use App\Http\Livewire\Traits\CommonListElements;

class InstituteList extends Component
{
    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'institute.destroy';
    private InstituteRepository $instituteRepo;
    public $reportList;

    public function boot(InstituteRepository $instituteRepo)
    {
        $this->instituteRepo = $instituteRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->instituteRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }
    public function render()
    {
        $data = [
            'records' => $this->instituteRepo->getListData($this->perPage, $this->search),
      ];
        return view('livewire.institute-list' ,$data);
    }
}
