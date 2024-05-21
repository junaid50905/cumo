<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\CareNeedRepository;
use App\Http\Livewire\Traits\CommonListElements;

class CareNeedList extends Component
{
    use WithPagination, CommonListElements;
    private CareNeedRepository $careRepo;
    public $reportList;
    protected string $destroyRoute = 'care-need.destroy';

    public function boot(CareNeedRepository $careRepo)
    {
        $this->careRepo = $careRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->careRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }



    public function render()
    {
        $data = [
            'records' => $this->careRepo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.care-need-list', $data);
    }
}
