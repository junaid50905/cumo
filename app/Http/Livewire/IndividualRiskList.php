<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\IndividualRiskRepositories;

class IndividualRiskList extends Component
{
    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'individual-risk.destroy';
    private IndividualRiskRepositories $individualRiskRepo;
    public $reportList;

    public function boot(IndividualRiskRepositories $individualRiskRepo)
    {
        $this->individualRiskRepo = $individualRiskRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->individualRiskRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }

    public function delete($id)
    {
        $this->individualRiskRepo->delete($id);
        $this->dispatchBrowserEvent('notify', 'Deleted');
    }

    public function render()
    {
        $data = [
            'records' => $this->individualRiskRepo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.individual-risk-list', $data);
    }
}
