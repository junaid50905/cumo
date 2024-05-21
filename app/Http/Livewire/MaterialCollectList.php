<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\MaterialCollectionRepository;

class MaterialCollectList extends Component
{

    use WithPagination, CommonListElements;

    protected string $destroyRoute = 'material-collect.destroy';

    private MaterialCollectionRepository $repo;


    public function boot(MaterialCollectionRepository $repository)
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

        return view('livewire.material-collect-list', $data);
    }
}
