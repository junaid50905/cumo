<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\YearEndCloseRepository;
use App\Http\Livewire\Traits\CommonListElements;

class YearEndCloseList extends Component
{

    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'yearend.destroy';
    private YearEndCloseRepository $yearEndCloseRepo;
    public $reportList;

    public function boot(YearEndCloseRepository $yearEndCloseRepo)
    {
        $this->yearEndCloseRepo = $yearEndCloseRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->yearEndCloseRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }
    public function render()
    {
        $data = [
            'records' => $this->yearEndCloseRepo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.year-end-close-list' ,$data);
    }
}
