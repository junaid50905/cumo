<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\CurrencySetupRepository;
use App\Http\Livewire\Traits\CommonListElements;

class CurrencyList extends Component
{
    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'currency.destroy';
    private CurrencySetupRepository $currencyRepo;
    // public $reportList;

    public function boot(CurrencySetupRepository $currencyRepo)
    {
        $this->currencyRepo = $currencyRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->currencyRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }

    public function render()
    {
        $data = [
            'records' => $this->currencyRepo->getListData($this->perPage, $this->search),
      ];
        return view('livewire.currency-list', $data);
    }
}
