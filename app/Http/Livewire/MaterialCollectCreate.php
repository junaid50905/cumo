<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Services\ProductService;
use App\Repositories\UserRepository;
use App\Repositories\StockRepository;
use App\Repositories\ProjectRepository;
use App\Repositories\WarehouseRepository;
use App\Http\Livewire\Traits\CommonAddMore;
use App\Services\MaterialCollectionService;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\MaterialCollectionRepository;

class MaterialCollectCreate extends Component
{

    use WithPagination, CommonListElements, CommonAddMore;
    private string $destroyRoute = 'material-collect.destroy';

    private MaterialCollectionService $service;
    private MaterialCollectionRepository $repo;
    private ProductService $productService;
    private ProjectRepository $projectRepo;
    private UserRepository $userRepo;
    private WarehouseRepository $warehouseRepository;
    private StockRepository $stockRepo;
    protected array $addMoreItems = ['product_id', 'avl_stock', 'qty'];

    public function boot(
        MaterialCollectionService $service,
        MaterialCollectionRepository $repository,
        ProductService $productService,
        ProjectRepository $projectRepository,
        UserRepository $userRepository,
        WarehouseRepository $warehouseRepository,
        StockRepository $stockRepository,
    ) {
        $this->inputs[] = $this->numberOfItems;
        $this->service = $service;
        $this->repo = $repository;
        $this->productService = $productService;
        $this->projectRepo = $projectRepository;
        $this->userRepo = $userRepository;
        $this->warehouseRepository = $warehouseRepository;
        $this->stockRepo = $stockRepository;

        $targetKey = count($this->inputs) - 1;
        foreach ($this->addMoreItems as $each) {
            $this->{$each}[$targetKey] = null;
        }
    }


    public $materialCollect;
    public $collected_for;
    public $project_id;
    public $date;
    public $warehouse_id;
    public $produce_product_id;
    public $product_id;
    public $will_produce;
    public $avl_stock;
    public $qty;

    public function mount()
    {
        if ($this->materialCollect) {
            $this->materialCollect = $this->repo->getRelatedData($this->materialCollect, ['details']);

            $this->collected_for = $this->materialCollect->collected_for;
            $this->date = $this->materialCollect->date;
            $this->warehouse_id = $this->materialCollect->warehouse_id;
            $this->produce_product_id = $this->materialCollect->produce_product_id;
            $this->will_produce = $this->materialCollect->will_produce;
            $this->created_by = $this->materialCollect->created_by;

            $this->inputs = $this->materialCollect->details->toArray();

            foreach ($this->materialCollect->details as $key => $detail) {
                $this->product_id[$key] = $detail->product_id;
                $this->avl_stock[$key] = $detail->available_qty ?? 0;
                $this->qty[$key] = $detail->qty;
            }
        }
    }

    public function updated($name, $value)
    {
        if (str_starts_with($name, 'product_id.')) {
            $targetKey = $this->getTargetKey($name);

            if (!$value || !$this->project_id || !$this->warehouse_id) {
                $this->dispatchBrowserEvent('notify', ['type' => 'error', 'message' => 'Sorry no related product found']);
                $this->avl_stock[$targetKey] = 0;
                return;
            }

            $productInfo = $this->stockRepo->getDetailAccordingly($this->project_id, $this->warehouse_id, $value);
            if (!$productInfo) {
                $this->dispatchBrowserEvent('notify', ['type' => 'error', 'message' => 'Sorry no related product found']);
                $this->avl_stock[$targetKey] = 0;
                return;
            }

            $this->avl_stock[$targetKey] = $productInfo->qty;
            // $this->price[$targetKey]         = $productInfo->product->selling_price;
        }
    }

    protected array $rules = [
        'project_id' => 'required',
        'collected_for' => 'required',
        'date' => 'required',
        'warehouse_id' => 'required',
        'produce_product_id' => 'required',
        'will_produce' => 'required',
        'product_id.*' => 'required',
        'avl_stock.*' => 'required',
        'qty.*' => 'required',
    ];

    public function update()
    {
        $this->service->update($this->materialCollect, $this->validate());
        $this->dispatchBrowserEvent('notify');
        $this->redirectRoute('material-collect.create');
    }

    // public function updated($name, $value)
    // {
    //     if (str_starts_with($name, 'product_id.')) {
    //         dd($name);
    //         if (!$value || !$this->project_id || !$this->warehouse_id)
    //             return;

    //         $productInfo = $this->stockRepo->getDetailAccordingly($this->project_id, $this->warehouse_id, $value);
    //         if (!$productInfo) return;

    //         $targetKey = $this->getTargetKey($name);

    //         $this->available_qty[$targetKey] = $productInfo->qty;
    //         $this->price[$targetKey] = $productInfo->product->selling_price;
    //     }

    //     if (str_starts_with($name, 'qty.') || str_starts_with($name, 'discount.')) {
    //         $targetKey = $this->getTargetKey($name);

    //         if (!isset($this->available_qty[$targetKey]) or !$this->available_qty[$targetKey])
    //             return;

    //         if (isset($this->price[$targetKey]) && $this->price[$targetKey] && isset($this->qty[$targetKey]) && $this->qty[$targetKey]) {
    //             $this->sub_total[$targetKey] = ($this->price[$targetKey] * $this->qty[$targetKey]) - ($this->discount[$targetKey] ?? 0);
    //         }
    //     }
    // }

    public function render()
    {

        $data = [
            'projects' => $this->projectRepo->getData(),
            'products' => $this->productService->getFormattedDataAsOptGroup(),
            'users' => $this->userRepo->getData(),
            'warehouses' => $this->warehouseRepository->getData(),
        ];

        return view('livewire.material-collect-create', $data);
    }
}
