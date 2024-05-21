<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Services\ProductService;
use App\Repositories\UserRepository;
use App\Repositories\StockRepository;
use App\Services\StockTransferService;
use App\Repositories\ProjectRepository;
use App\Repositories\CustomerRepository;
use App\Repositories\SupplierRepository;
use App\Repositories\WarehouseRepository;
use App\Http\Livewire\Traits\CommonAddMore;
use App\Repositories\StockTransferRepository;
use App\Http\Livewire\Traits\CommonListElements;

class StockTransferCreate extends Component
{
    use WithPagination, CommonListElements, CommonAddMore;

    public $stockTransfer;

    public $issue_type;
    public $reference;
    public $date;
    public $warehouse_id_from;
    public $warehouse_id_to;
    public $product_id;
    public $available_Quantity;
    public $transfer_quantity;
    public $serial;
    public $warehouse_to_warehouse;
    public $warehouse_to_customer;
    public $warehouse_to_service_provider;

    private StockTransferService $service;
    private StockTransferRepository $repo;
    private ProductService $productService;
    private ProjectRepository $projectRepo;
    private UserRepository $userRepo;
    private WarehouseRepository $warehouseRepository;
    private StockRepository $stockRepo;
    private CustomerRepository $customerRepo;
    private SupplierRepository $supplierRepo;
    protected array $addMoreItems = ['product_id', 'available_Quantity', 'transfer_quantity', 'serial'];

    public function boot(
        StockTransferService $service,
        StockTransferRepository $repository,
        ProductService $productService,
        ProjectRepository $projectRepository,
        UserRepository $userRepository,
        WarehouseRepository $warehouseRepository,
        StockRepository $stockRepository,
        CustomerRepository $customerRepo,
        SupplierRepository $supplierRepo
    ) {
        $this->inputs[] = $this->numberOfItems;

        $this->service = $service;
        $this->repo = $repository;
        $this->productService = $productService;
        $this->projectRepo = $projectRepository;
        $this->userRepo = $userRepository;
        $this->warehouseRepository = $warehouseRepository;
        $this->stockRepo = $stockRepository;
        $this->customerRepo = $customerRepo;
        $this->supplierRepo = $supplierRepo;

        $targetKey = count($this->inputs) - 1;
        foreach ($this->addMoreItems as $each) {
            $this->{$each}[$targetKey] = null;
        }

        $this->warehouse_to_warehouse = true;
        $this->warehouse_to_customer = false;
        $this->warehouse_to_service_provider = false;
    }



    public function mount()
    {
        if ($this->stockTransfer) {
            $this->stockTransfer = $this->repo->getRelatedData($this->stockTransfer, ['details']);

            $this->project_id = $this->stockTransfer->project_id;
            $this->issue_type = $this->stockTransfer->issue_type;
            $this->reference = $this->stockTransfer->reference;
            $this->date = $this->stockTransfer->date;
            $this->warehouse_id_from = $this->stockTransfer->warehouse_id_from;
            $this->warehouse_id_to = $this->stockTransfer->warehouse_id_to;

            $this->inputs = $this->stockTransfer->details->toArray();

            foreach ($this->stockTransfer->details as $key => $detail) {
                $this->product_id[$key] = $detail->product_id;
                $this->transfer_quantity[$key] = $detail->transfer_quantity;
                $this->available_Quantity[$key] = $detail->available_qty;
                $this->serial[$key] = $detail->serial;
            }
        }
    }

    public function updated($name, $value)
    {
        if (str_starts_with($name, 'product_id.')) {
            $targetKey = $this->getTargetKey($name);

            if (!$value || !$this->project_id || !$this->warehouse_id_from) {
                $this->dispatchBrowserEvent('notify', ['type' => 'error', 'message' => 'Sorry no related product found']);
                $this->available_Quantity[$targetKey] = 00;
                return;
            }

            $productInfo = $this->stockRepo->getDetailAccordingly($this->project_id, $this->warehouse_id_from, $value);
            if (!$productInfo) {
                $this->dispatchBrowserEvent('notify', ['type' => 'error', 'message' => 'Sorry no related product found']);
                $this->available_Quantity[$targetKey] = 0;
                return;
            }

            $this->available_Quantity[$targetKey] = $productInfo->qty;
            // $this->price[$targetKey]         = $productInfo->product->selling_price;
        }

        if (str_starts_with($name, 'issue_type')) {
            if ($value === 'Warehouse to Warehouse') {
                $this->warehouse_to_warehouse = true;
                $this->warehouse_to_customer = false;
                $this->warehouse_to_service_provider = false;
            }

            if ($value === 'Warehouse to Customer') {
                $this->warehouse_to_warehouse = false;
                $this->warehouse_to_customer = true;
                $this->warehouse_to_service_provider = false;
            }

            if ($value === 'Warehouse to Service Provider') {
                $this->warehouse_to_warehouse = false;
                $this->warehouse_to_customer = false;
                $this->warehouse_to_service_provider = true;
            }
        }
    }

    protected array $rules = [
        'project_id' => 'required',
        'issue_type' => 'required',
        'reference' => 'required',
        'date' => 'required',
        'warehouse_id_from' => 'required',
        'warehouse_id_to' => 'required',
        'product_id.*' => 'required',
        'available_Quantity.*' => 'required',
        'transfer_quantity.*' => 'required',
        'serial.*' => 'required',
    ];

    public function update()
    {
        $this->service->update($this->stockTransfer, $this->validate());
        $this->dispatchBrowserEvent('notify');
        $this->redirectRoute('stock-transfer.create');
    }


    public function render()
    {
        $data = [
            'projects' => $this->projectRepo->getData(),
            'products' => $this->productService->getFormattedDataAsOptGroup(),
            'users' => $this->userRepo->getData(),
            'warehouses' => $this->warehouseRepository->getData(),
            'customers' => $this->customerRepo->getData(),
            'suppliers' => $this->supplierRepo->getData(),
            'issueType' => [
                'Warehouse to Warehouse' => 'Warehouse to Warehouse',
                'Warehouse to Customer' => 'Warehouse to Customer',
                'Warehouse to Service Provider' => 'Warehouse to Service Provider'
            ],
        ];
        return view('livewire.stock-transfer-create', $data);
    }
}
