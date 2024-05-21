<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\StockOutRepository;
use App\Http\Livewire\Traits\CommonListElements;

class StockOutList extends Component
{


    use WithPagination, CommonListElements;
    private StockOutRepository $repo;

    protected string $destroyRoute = 'stock-out.destroy';

    public function boot(StockOutRepository $repository)
    {
        $this->repo = $repository;
    }

    public function toggleApprove($recordId)
    {
        $this->repo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }

    public function render()
    {
        $data = [
            'records' => $this->repo->getListData($this->perPage, $this->search)
        ];
        return view('livewire.stock-out-list', $data);
    }
}
