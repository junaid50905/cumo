<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\CategoryRepository;

class ProductCategoryList extends Component
{
    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'category.destroy';
    private CategoryRepository $productCategoryRepo;
    public $reportList;

    public function boot(CategoryRepository $productCategoryRepo)
    {
        $this->productCategoryRepo = $productCategoryRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->productCategoryRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }

    public function render()
    {

        $data = [
            'records' => $this->productCategoryRepo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.product-category-list',$data);
    }
}
