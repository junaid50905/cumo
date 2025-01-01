<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\CareNeeds\CareNeedPartOneRepository;

class CareNeedPartOneList extends Component
{

    use WithPagination, CommonListElements;
    private CareNeedPartOneRepository $careNeedPartOneRepo;
    public $reportList;
    protected string $destroyRoute = 'care-need-part-one.destroy';

    public function boot(CareNeedPartOneRepository $careNeedPartOneRepo)
    {
        $this->careNeedPartOneRepo = $careNeedPartOneRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->careNeedPartOneRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }

 
    public function render()
    {
        $data = [
            'records' => $this->careNeedPartOneRepo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.care-need-part-one-list',$data);
    }
}
