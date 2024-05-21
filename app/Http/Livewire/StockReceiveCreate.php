<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Services\ProductService;
use App\Repositories\UserRepository;
use App\Repositories\StockRepository;
use App\Services\StockReceiveService;
use App\Repositories\ProductRepository;
use App\Repositories\ProjectRepository;
use App\Repositories\PurchaseRepository;
use App\Repositories\WarehouseRepository;
use App\Http\Livewire\Traits\CommonAddMore;
use App\Repositories\StockReceiveRepository;
use App\Repositories\PurchaseOrderRepository;
use App\Http\Livewire\Traits\CommonListElements;

class StockReceiveCreate extends Component
{
    use WithPagination, CommonListElements, CommonAddMore;
    private string $destroyRoute = 'stock-receive.destroy';

    public $stockReceive;
    public $date;
    public $purchase_id;
    public $note;
    public $exp_date;
    public $available_qty;
    public $received;
    public $receivable;
    public $return;
    public $stock_receive_qty;
    public $serial;
    public $stock;
    public $type;
    public $purchaseProduct;

    private StockReceiveService $service;
    private StockReceiveRepository $repo;
    private ProductService $productService;
    private ProductRepository $productRepo;
    private PurchaseOrderRepository $purchaseOrderRepo;
    private ProjectRepository $projectRepo;
    private UserRepository $userRepo;
    private PurchaseRepository $purchaseRepo;
    private WarehouseRepository $warehouseRepository;
    private StockRepository $stockRepo;
    protected array $addMoreItems = ['product_id', 'exp_date', 'available_qty', 'received', 'return', 'receivable', 'stock_receive_qty', 'serial'];

    public function boot(
        StockReceiveService $service,
        StockReceiveRepository $repository,
        ProductService $productService,
        ProductRepository $productRepo,
        ProjectRepository $projectRepository,
        PurchaseOrderRepository $purchaseOrderRepository,
        UserRepository $userRepository,
        WarehouseRepository $warehouseRepository,
        StockRepository $stockRepository,
        PurchaseRepository $purchaseRepository,
    ) {
        $this->inputs[] = $this->numberOfItems;
        $this->purchaseOrderRepo = $purchaseOrderRepository;
        $this->service = $service;
        $this->repo = $repository;
        $this->productService = $productService;
        $this->productRepo = $productRepo;
        $this->projectRepo = $projectRepository;
        $this->userRepo = $userRepository;
        $this->warehouseRepository = $warehouseRepository;
        $this->stockRepo = $stockRepository;
        $this->purchaseRepo = $purchaseRepository;

        $targetKey = count($this->inputs) - 1;
        foreach ($this->addMoreItems as $each) {
            $this->{$each}[$targetKey] = null;
        }
        $this->purchaseProduct = [];
    }


    public function mount()
    {
        if ($this->stockReceive) {
            $this->stockReceive = $this->repo->getRelatedData($this->stockReceive, ['details']);

            $this->project_id = $this->stockReceive->project_id;
            $this->type = $this->stockReceive->type;
            $this->purchase_type = $this->stockReceive->purchase_type;
            $this->purchase_id = $this->stockReceive->purchase_id;
            $this->return_type = $this->stockReceive->return_type;
            $this->date = $this->stockReceive->date;
            $this->warehouse_id = $this->stockReceive->warehouse_id;

            $this->inputs = $this->stockReceive->details->toArray();

            foreach ($this->stockReceive->details as $key => $detail) {
                $this->product_id[$key] = $detail->product_id;
                $this->available_qty[$key] = $detail->available_qty;
                $this->exp_date[$key] = $detail->exp_date;
                $this->received[$key] = $detail->received;
                $this->return[$key] = $detail->return;
                $this->receivable[$key] = $detail->receivable;
                $this->stock_receive_qty[$key] = $detail->stock_receive_qty;
                $this->serial[$key] = $detail->serial;
            }
        }
    }

    public function updated($name, $value)
    {
        $targetKey = $this->getTargetKey($name);

        if (str_starts_with($name, 'product_id.')) {

            if (!$value || !$this->project_id || !$this->warehouse_id) {
                $this->dispatchBrowserEvent('notify', ['type' => 'error', 'message' => 'Sorry no related product found']);
                $this->available_qty[$targetKey] = 0;
                return;
            }

            $productInfo = $this->stockRepo->getDetailAccordingly($this->project_id, $this->warehouse_id, $value);
            if (!$productInfo) {
                $this->dispatchBrowserEvent('notify', ['type' => 'error', 'message' => 'Sorry no related product found']);
                $this->available_qty[$targetKey] = 0;
                return;
            }

            $this->available_qty[$targetKey] = $productInfo->qty;
        }

        if ($name === 'purchase_id') {
            $purchaseProduct = $this->purchaseOrderRepo->getPurchaseProduct($value);
            if ($purchaseProduct && $purchaseProduct->details->count()) {
                $this->inputs = $purchaseProduct->details->toArray();
                foreach ($purchaseProduct->details as $key => $detail) {
                    $this->product_id[$key] = $detail->product_id;
                    $this->exp_date[$key] = $detail->exp_date;
                    $this->receivable[$key] = $detail->qty;

                    if (isset($this->warehouse_id) && isset($this->project_id) && isset($detail->product_id)) {

                        $stock = $this->stockRepo->getDetailAccordingly($this->project_id, $this->warehouse_id, $detail->product_id);

                        if ($stock) {
                            $this->available_qty[$key] = $stock->qty;
                        } else
                            $this->available_qty[$key] = 0;
                    }
                }
            } else {
                $this->inputs = [];
                unset($this->product_id);
                unset($this->available_qty);
                unset($this->exp_date);
                unset($this->receivable);
            }
        }

        if (str_starts_with($name, 'return.')) {
            $targetKey = $this->getTargetKey($name);
            $this->stock_receive_qty[$targetKey] =  $this->received[$targetKey] -  (int)$value;
        }

        if (str_starts_with($name, 'received.')) {
            $targetKey = $this->getTargetKey($name);
            if ($this->received[$targetKey] > $this->receivable[$targetKey]) {
                // $this->dispatchBrowserEvent('notify', ['type' => 'error', 'message' => 'Value is Greater-than Receivable']);
                $this->addError($name, 'Value is Greater-than Receivable');
                $this->stock_receive_qty[$targetKey] = 0;
                return;
            }

            $this->stock_receive_qty[$targetKey] = $value;
        }
    }

    protected array $rules = [
        'project_id' => 'required',
        'purchase_id' => 'nullable',
        'warehouse_id' => 'required',
        'type' => 'required',
        'date' => 'required',
        'note' => 'nullable',
        'product_id.*' => 'required',
        'exp_date.*' => 'required',
        'available_qty.*' => 'required',
        'received.*' => 'required',
        'return.*' => 'required',
        'receivable.*' => 'required',
        'stock_receive_qty.*' => 'required',
        'serial.*' => 'required',
    ];

    public function update()
    {
        $this->service->update($this->stockReceive, $this->validate());
        $this->dispatchBrowserEvent('notify');
        $this->redirectRoute('stock-receive.create');
    }

    public function render()
    {

        $data = [
            'projects' => $this->projectRepo->getData(),
            'products' => $this->productRepo->getData(),
            'users' => $this->userRepo->getData(),
            'warehouses' => $this->warehouseRepository->getData(),
            'purchaseOrder' => $this->purchaseOrderRepo->getData(),
            'purchases' => $this->purchaseRepo->getData(),
            'receiveTypes' => [
                'Purchase' => 'Purchase',
                'Return' => 'Return',
                'Temporary' => 'Temporary'
            ]
        ];

        return view('livewire.stock-receive-create', $data);
    }
}
