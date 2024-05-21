<?php

namespace App\Http\Livewire;

use App\Repositories\CategoryRepository;
use App\Utility\ProductTypeConstants;
use Livewire\Component;

class CreateProductList extends Component
{
    private CategoryRepository $productCategoryRepo;
    private ProductTypeConstants $productTypeRepo;

    public function boot(CategoryRepository $productCategoryRepo,ProductTypeConstants $productTypeRepo)
    {
        $this->productCategoryRepo = $productCategoryRepo;
        $this->productTypeRepo = $productTypeRepo;
    }

    public function render()
    {
        $data = [
            'category' => $this->productCategoryRepo->getData(),
            'productType' => ProductTypeConstants::$productType,
        ];
        return view('livewire.create-product-list',$data);
    }
}
