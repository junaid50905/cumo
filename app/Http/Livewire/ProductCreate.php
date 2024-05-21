<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Services\ProductService;
use App\Utility\ProductConstant;
use App\Repositories\UserRepository;
use App\Repositories\StockRepository;
use App\Repositories\ProductRepository;
use App\Repositories\ProjectRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\WarehouseRepository;
use App\Http\Livewire\Traits\CommonAddMore;
use App\Repositories\MeasureUnitRepository;
use App\Repositories\ProductCategoryRepository;
use App\Http\Livewire\Traits\CommonListElements;

class ProductCreate extends Component
{
    use WithPagination, CommonListElements, CommonAddMore;
    protected string $destroyRoute = 'product.destroy';
    private ProductService $service;
    private ProductRepository $repo;
    private ProjectRepository $projectRepo;
    private UserRepository $userRepo;
    private MeasureUnitRepository $measureUnitRepo;
    private WarehouseRepository $warehouseRepository;
    private CategoryRepository $productCategoryRepo;
    protected array $addMoreItems = ['multi_category_id', 'measure', 'quantity', 'price', 'cost'];

    public function boot(
        CategoryRepository $productCategoryRepo,
        ProductRepository $repository,
        ProductService $service,
        ProjectRepository $projectRepository,
        UserRepository $userRepository,
        WarehouseRepository $warehouseRepository,
        MeasureUnitRepository $measureUnitRepo,
    ) {
        $this->inputs[] = $this->numberOfItems;
        $this->repo = $repository;
        $this->service = $service;
        $this->projectRepo = $projectRepository;
        $this->userRepo = $userRepository;
        $this->warehouseRepository = $warehouseRepository;
        $this->measureUnitRepo = $measureUnitRepo;
        $this->productCategoryRepo = $productCategoryRepo;

        $targetKey = count($this->inputs) - 1;
        foreach ($this->addMoreItems as $each) {
            $this->{$each}[$targetKey] = null;
        }
    }


    public $product;
    public $name;
    public $code;
    public $type;
    public $description;
    public $category_id;
    public $unit_id;
    public $reorder_quantity;
    public $image;
    public $selling_price;
    public $cost_price;
    public $making_cost;
    public $current_price;
    public $expiry_alert;
    public $multi_category_id;
    public $measure;
    public $quantity;
    public $price;
    public $cost;
    public $is_active;
    public $sale_price_in_percent;




    protected array $rules = [
        'code' => 'nullable',
        'name' => 'nullable',
        'type' => 'nullable',
        'description' => 'nullable',
        'category_id' => 'nullable',
        'unit_id' => 'nullable',
        'reorder_quantity' => 'nullable',
        'image' => 'nullable',
        'selling_price' => 'nullable',
        'cost_price'  => 'nullable',
        'expiry_alert' => 'nullable',
        'making_cost' => 'nullable',
        'current_price' => 'nullable',
        'is_active' => 'nullable',
        'sale_price_in_percent' => 'nullable',

        'product_id.*' => 'nullable',
        'measure.*' => 'nullable',
        'quantity.*' => 'nullable',
        'price.*' => 'nullable',
        'cost.*' => 'nullable',
    ];




    public function mount()
    {
        if ($this->product) {
            $this->product = $this->repo->getRelatedData($this->product, ['details']);
            $this->code = $this->product->code;
            $this->name = $this->product->name;
            $this->type = $this->product->type;
            $this->description = $this->product->description;
            $this->category_id = $this->product->category_id;
            $this->measurement = $this->product->measurement;
            $this->reorder_quantity = $this->product->reorder_quantity;
            $this->category_id = $this->product->category_id;
            $this->unit_id = $this->product->unit_id;
            $this->image = $this->product->image;
            $this->selling_price = $this->product->selling_price;
            $this->cost_price = $this->product->cost_price;
            $this->expiry_alert = $this->product->expiry_alert;

            $this->making_cost = $this->product->making_cost;
            $this->current_price = $this->product->current_price;
            $this->is_active = $this->product->is_active;
            $this->sale_price_in_percent = $this->product->sale_price_in_percent;

            // dd($this->category_id);
            $this->inputs = $this->product->details->toArray();

            foreach ($this->product->details as $key => $detail) {
                $this->product_id[$key] = $detail->product_id;
                $this->measure[$key] = $detail->measure;
                $this->price[$key] = $detail->price;
                $this->cost[$key] = $detail->cost;
            }
        }
    }



    public function update()
    {
        $this->service->update($this->product, $this->validate());
        $this->dispatchBrowserEvent('notify');
        $this->redirectRoute('product.create');
    }


    public function render()
    {
        $data = [
            'products' => $this->service->getFormattedDataAsOptGroup(),
            'types' => ProductConstant::$Type,
            'categories' => $this->productCategoryRepo->getData(),
            'unit' => $this->measureUnitRepo->getData(),
        ];
        return view('livewire.product-create', $data);
    }
}
