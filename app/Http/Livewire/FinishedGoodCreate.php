<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Services\ProductService;
use App\Repositories\UserRepository;
use App\Services\FinishedGoodService;
use App\Repositories\ProjectRepository;
use App\Repositories\WarehouseRepository;
use App\Http\Livewire\Traits\CommonAddMore;
use App\Repositories\FinishedGoodRepository;
use App\Http\Livewire\Traits\CommonListElements;

class FinishedGoodCreate extends Component
{
    use WithPagination, CommonListElements, CommonAddMore;

    private string $destroyRoute = 'finished-goods.destroy';
    private FinishedGoodService $service;
    private FinishedGoodRepository $repo;
    private ProductService $productService;
    private ProjectRepository $projectRepo;
    private UserRepository $userRepo;
    private WarehouseRepository $warehouseRepository;
    
    protected array $addMoreItems = ['product_id', 'unit', 'qty'];

    public $finishedGood;
    public $date;
    public $note;
    public $project_id;
    public $qty;
    public $unit;

    public function boot(
        FinishedGoodService $service,
        FinishedGoodRepository $repository,
        ProductService $productService,
        ProjectRepository $projectRepository,
        UserRepository $userRepository,
        WarehouseRepository $warehouseRepository,
    ) {
        $this->inputs[] = $this->numberOfItems;
        $this->service = $service;
        $this->repo = $repository;
        $this->productService = $productService;
        $this->projectRepo = $projectRepository;
        $this->userRepo = $userRepository;
        $this->warehouseRepository = $warehouseRepository;

        $targetKey = count($this->inputs) - 1;
        foreach ($this->addMoreItems as $each) {
            $this->{$each}[$targetKey] = null;
        }
    }


    public function mount()
    {
        if ($this->finishedGood) {
            $this->finishedGood = $this->repo->getRelatedData($this->finishedGood, ['details']);
            $this->date = $this->finishedGood->date;
            $this->project_id = $this->finishedGood->project_id;
            $this->warehouse_id = $this->finishedGood->warehouse_id;
            $this->note = $this->finishedGood->note;

            $this->inputs = $this->finishedGood->details->toArray();

            foreach ($this->finishedGood->details as $key => $detail) {
                $this->product_id[$key] = $detail->product_id;
                $this->qty[$key] = $detail->qty;
                $this->unit[$key] = $detail->unit;
            }
        }
    }

    protected array $rules = [
        'project_id' => 'required',
        'warehouse_id' => 'required',
        'date' => 'required',
        'note' => 'nullable',

        'product_id.*' => 'required',
        'unit.*' => 'required',
        'qty.*' => 'required',
    ];

    public function update()
    {
        $this->service->update($this->finishedGood, $this->validate());
        $this->dispatchBrowserEvent('notify');
        $this->redirectRoute('stock-receive.create');
    }

    public function render()
    {
        $data = [
            'projects' => $this->projectRepo->getData(),
            'products' => $this->productService->getFormattedDataAsOptGroup(),
            'users' => $this->userRepo->getData(),
            'warehouses' => $this->warehouseRepository->getData(),
            'unitType' => [
                'kg' => 'KG',
                'grum' => 'G',
                'ton' => 'TON'
            ],
        ];
        return view('livewire.finished-good-create', $data);
    }
}
