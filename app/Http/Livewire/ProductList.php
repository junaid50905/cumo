<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\ProductRepository;

class ProductList extends Component
{
    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'product.destroy';
    private ProductRepository $productRepo;
    public $reportList;

    public function boot(ProductRepository $productRepo)
    {
        $this->productRepo = $productRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->productRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }

    public function render()
    {
        $data = [
            'records' => $this->productRepo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.product-list',$data);
    }
}
