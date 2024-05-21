<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\VocationalMarkingCategoryRepository;

class VocationalMarkingCategoryList extends Component
{

    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'Vocational-Mcategory.destroy';
    private VocationalMarkingCategoryRepository $repo;
    public function boot(VocationalMarkingCategoryRepository $repository)
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
        return view('livewire.vocational-marking-category-list', $data);
    }
}
