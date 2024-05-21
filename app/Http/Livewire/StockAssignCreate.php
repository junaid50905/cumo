<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Services\ProductService;
use App\Repositories\UserRepository;
use App\Services\StockAssignService;
use App\Repositories\StockRepository;
use App\Repositories\ProjectRepository;
use App\Repositories\WarehouseRepository;
use App\Http\Livewire\Traits\CommonAddMore;
use App\Repositories\StockAssignRepository;
use App\Http\Livewire\Traits\CommonListElements;

class StockAssignCreate extends Component
{

    use WithPagination, CommonListElements, CommonAddMore;

    private StockAssignService $service;
    private StockAssignRepository $repo;
    private ProductService $productService;
    private ProjectRepository $projectRepo;
    private UserRepository $userRepo;
    private WarehouseRepository $warehouseRepository;
    private StockRepository $stockRepo;
    protected array $addMoreItems = ['product_id', 'product_details', 'depreciation_percent', 'assigned_to'];

    public function boot(
        StockAssignService $service,
        StockAssignRepository $repository,
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

    public $stockAssign;

    public $project_id;
    public $warehouse_id;
    public $date;
    public $note;
    public $product_id;
    public $product_details;
    public $depreciation_percent;
    public $assigned_to;
    public $amount;

    protected array $rules = [
        'project_id' => 'required',
        'warehouse_id' => 'required',
        'date' => 'required',
        'note' => 'required',
        'product_id.*' => 'required',
        'product_details.*' => 'required',
        'depreciation_percent.*' => 'required',
        'assigned_to.*' => 'required'
    ];


    public function mount()
    {
        if ($this->stockAssign) {
            $this->stockAssign = $this->repo->getRelatedData($this->stockAssign, ['details']);

            $this->project_id = $this->stockAssign->project_id;
            $this->warehouse_id = $this->stockAssign->warehouse_id;
            $this->date = $this->stockAssign->date;
            $this->note = $this->stockAssign->note;

            $this->inputs = $this->stockAssign->details->toArray();
            foreach ($this->stockAssign->details as $key => $detail) {
                $this->product_id[$key] = $detail->product_id;
                $this->product_details[$key] = $detail->product_details;
                $this->depreciation_percent[$key] = $detail->depreciation_percent;
                $this->assigned_to[$key] = $detail->assigned_to;
            }
        }
    }


    public function update()
    {
        $this->service->update($this->stockAssign, $this->validate());
        $this->dispatchBrowserEvent('notify');
        $this->redirectRoute('stock-assign.create');
    }

    public function render()
    {
        $data = [
            'projects' => $this->projectRepo->getData(),
            'products' => $this->productService->getFormattedDataAsOptGroup(),
            'users' => $this->userRepo->getData(),
            'warehouses' => $this->warehouseRepository->getData(),
        ];
        return view('livewire.stock-assign-create', $data);
    }
}
