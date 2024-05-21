<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\ChartofAccountsRepository;
use App\Http\Livewire\Traits\CommonListElements;

class ChartofAccountsList extends Component
{


    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'chartof-accounts.destroy';
    private ChartofAccountsRepository $chartofAccountRepo;
    public $reportList;

    public function boot(ChartofAccountsRepository $chartofAccountRepo)
    {
        $this->chartofAccountRepo = $chartofAccountRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->chartofAccountRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }
    
    public function render()
    {

        $data = [
            'records' => $this->chartofAccountRepo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.chartof-accounts-list', $data);
    }
}
