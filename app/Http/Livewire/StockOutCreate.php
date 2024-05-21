<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Services\ProductService;
use App\Services\StockOutService;
use App\Repositories\UserRepository;
use App\Repositories\StockRepository;
use App\Repositories\ProjectRepository;
use App\Repositories\StockOutRepository;
use App\Repositories\WarehouseRepository;
use App\Http\Livewire\Traits\CommonAddMore;
use App\Http\Livewire\Traits\CommonListElements;

class StockOutCreate extends Component
{

    use WithPagination, CommonListElements, CommonAddMore;


    private StockOutService $service;
    private StockOutRepository $repo;
    private ProductService $productService;
    private ProjectRepository $projectRepo;
    private UserRepository $userRepo;
    private WarehouseRepository $warehouseRepository;
    private StockRepository $stockRepo;
    protected array $addMoreItems = ['product_id', 'total_stock', 'stock_out'];
    public function boot(
        StockOutService $service,
        StockOutRepository $repository,
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


    public $stockOut;
    public $records;
    public $project_id;
    public $warehouse_id;
    public $date;
    public $product_id;
    public $total_stock;
    public $stock_out;



    protected array $rules = [
        'project_id' => 'required',
        'warehouse_id' => 'required',
        'date' => 'required',
        'product_id.*' => 'required',
        'stock_out.*' => 'required',
        'total_stock.*' => 'required',
    ];




    public function mount()
    {
        if ($this->records) {
            $this->records = $this->repo->getRelatedData($this->records, ['details']);

            $this->project_id = $this->records->project_id;
            $this->date = $this->records->date;
            $this->warehouse_id = $this->records->warehouse_id;

            $this->inputs = $this->records->details->toArray();

            foreach ($this->records->details as $key => $detail) {
                $this->product_id[$key] = $detail->product_id;
                $this->stock_out[$key] = $detail->stock_out;
            }
        }
    }

    public function updated($name, $value)
    {
        if (str_starts_with($name, 'product_id.')) {
            $targetKey = $this->getTargetKey($name);

            if (!$value || !$this->project_id || !$this->warehouse_id) {
                $this->dispatchBrowserEvent('notify', ['type' => 'error', 'message' => 'Sorry no related product found']);
                $this->total_stock[$targetKey] = 00;
                return;
            }

            $productInfo = $this->stockRepo->getDetailAccordingly($this->project_id, $this->warehouse_id, $value);
            if (!$productInfo) {
                $this->dispatchBrowserEvent('notify', ['type' => 'error', 'message' => 'Sorry no related product found']);
                $this->total_stock[$targetKey] = 0;
                return;
            }

            $this->total_stock[$targetKey] = $productInfo->qty;
            // $this->price[$targetKey]         = $productInfo->product->selling_price;
        }
    }

    public function update()
    {
        $this->service->update($this->records, $this->validate());
        $this->dispatchBrowserEvent('notify');
        $this->redirectRoute('stock-out.create');
    }


    public function render()
    {

        $data = [
            'projects' => $this->projectRepo->getData(),
            'products' => $this->productService->getFormattedDataAsOptGroup(),
            'users' => $this->userRepo->getData(),
            'warehouses' => $this->warehouseRepository->getData(),
        ];

        return view('livewire.stock-out-create', $data);
    }
}
