<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\StockAssignRepository;

class StockAssignList extends Component
{

    use WithPagination, CommonListElements;

    private string $destroyRoute = 'stock-assign.destroy';
    private StockAssignRepository $repo;

    public function boot(StockAssignRepository $repository)
    {
        $this->repo = $repository;
    }

    public function toggleApprove($recordId)
    {
        $this->repo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
        $this->dispatchBrowserEvent('reload');
    }

    public function render()
    {
        $data = [
            'records' => $this->repo->getListData($this->perPage, $this->search)
        ];
        return view('livewire.stock-assign-list', $data);
    }
}
