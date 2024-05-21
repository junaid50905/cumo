<?php

namespace App\Http\Livewire;
use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\VocationalSubCategoryRepository;

class VocationalSubCategoryList extends Component
{
    use WithPagination, CommonListElements;
    private VocationalSubCategoryRepository $vocationalCategorySubRepo;
    public $reportList;
    protected string $destroyRoute = 'vocational-sub-category.destroy';

    public function boot(VocationalSubCategoryRepository $vocationalCategorySubRepo)
    {
        $this->vocationalCategorySubRepo = $vocationalCategorySubRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->vocationalCategorySubRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }
    
    public function render()
    {
        $data = [
            'records' => $this->vocationalCategorySubRepo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.vocational-sub-category-list' ,$data);
    }
}
