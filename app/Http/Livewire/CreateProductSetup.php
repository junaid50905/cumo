<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Traits\CommonAddMore;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\CategoryRepository;
use App\Repositories\CreateProductRepository;
use App\Services\CreateProductService;
use App\Services\ProductService;
use Livewire\Component;
use App\Utility\ProductTypeConstants;
use App\Utility\MeasurementConstant;
use Livewire\WithPagination;

class CreateProductSetup extends Component
{
    use WithPagination, CommonListElements, CommonAddMore;

    private CategoryRepository $productCategoryRepo;
    private CreateProductRepository $createProductRepo;
    private CreateProductService $service;
    private ProductService $productService;
    protected array $addMoreItems = ['product_id'];


    public function boot(
        CategoryRepository $productCategoryRepo,
        CreateProductRepository $createProductRepo,
        CreateProductService $service,
        ProductService $productService)
    {
        $this->inputs[] = $this->numberOfItems;
        $this->service = $service;
        $this->productCategoryRepo = $productCategoryRepo;
        $this->createProductRepo = $createProductRepo;
        $this->productService = $productService;

        $targetKey = count($this->inputs) - 1;
        foreach ($this->addMoreItems as $each) {
            $this->{$each}[$targetKey] = null;
        }
    }

    public function submit()
    {
        $this->createProductRepo->store($this->validate());
    }

    public function render()
    {
        $data = [
            'category' => $this->productCategoryRepo->getData(),
            'productType' => ProductTypeConstants::$productType,
            'measurements' => MeasurementConstant::$measurement,
            'products' => $this->productService->getFormattedDataAsOptGroup(),
            // 'measure_unit' => [
            //     'kg' => 'KG',
            //     'grum' => 'G',
            //     'ton' => 'TON'
            // ],
        ];
        return view('livewire.create-product-setup',$data);
    }
}
