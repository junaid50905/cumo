<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\FinishedGoodRepository;

class FinishedGoodList extends Component
{

    use WithPagination, CommonListElements;
    private FinishedGoodRepository $repo;
    protected string $destroyRoute = 'finished-goods.destroy';

    public function boot(FinishedGoodRepository $repository)
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
        return view('livewire.finished-good-list', $data);
    }
}
