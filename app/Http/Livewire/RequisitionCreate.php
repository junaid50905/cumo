<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Validation\Rule;
use App\Services\ProductService;
use Illuminate\Contracts\View\View;
use App\Repositories\UserRepository;
use App\Services\RequisitionService;
use App\Repositories\StockRepository;
use App\Rules\RequisitionProductRule;
use Illuminate\Contracts\View\Factory;
use App\Repositories\ProjectRepository;
use Illuminate\Support\Facades\Session;
use App\Repositories\WarehouseRepository;
use App\Repositories\BudgetHeadRepository;
use App\Http\Livewire\Traits\CommonAddMore;
use App\Repositories\RequisitionRepository;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\ChartofAccountsRepository;
use Illuminate\Contracts\Foundation\Application;

class RequisitionCreate extends Component
{
    use WithPagination, CommonListElements, CommonAddMore;

    private string $destroyRoute = 'requisition.destroy';

    public $requisition;
    public $requested_by;
    public $date;
    public $title;
    public $budget_head_id;
    public $budget_sub_head_id;
    public $account;

    private RequisitionService $service;
    private RequisitionRepository $repo;
    private ProductService $productService;
    private ProjectRepository $projectRepo;
    private UserRepository $userRepo;
    private WarehouseRepository $warehouseRepository;
    private StockRepository $stockRepo;
    private BudgetHeadRepository $budgetHeadRepo;
    private ChartofAccountsRepository $chartOfAccounts;
    protected array $addMoreItems = ['product_id', 'available_qty', 'price', 'qty', 'sub_total', 'budget_head_id', 'budget_sub_head_id','account'];

    public function boot(
        RequisitionService $service,
        RequisitionRepository $repository,
        ProductService $productService,
        ProjectRepository $projectRepository,
        UserRepository $userRepository,
        WarehouseRepository $warehouseRepository,
        StockRepository $stockRepository,
        BudgetHeadRepository $budgetHeadRepository,
        ChartofAccountsRepository $chartOfAccounts,
    ) {
        $this->service = $service;
        $this->repo = $repository;
        $this->productService = $productService;
        $this->projectRepo = $projectRepository;
        $this->userRepo = $userRepository;
        $this->warehouseRepository = $warehouseRepository;
        $this->stockRepo = $stockRepository;
        $this->budgetHeadRepo = $budgetHeadRepository;
        $this->chartOfAccounts = $chartOfAccounts;
        $this->inputs[] = $this->numberOfItems;

        $targetKey = count($this->inputs) - 1;
        foreach ($this->addMoreItems as $each) {
            $this->{$each}[$targetKey] = null;
        }
    }

    public function mount()
    {
        if ($this->requisition) {
            $this->requisition = $this->repo->getRelatedData($this->requisition, ['details']);

            $this->project_id = $this->requisition->project_id;
            $this->requested_by = $this->requisition->requested_by;
            $this->date = $this->requisition->date;
            $this->title = $this->requisition->title;
            $this->warehouse_id = $this->requisition->warehouse_id;

            $this->inputs = $this->requisition->details->toArray();

            foreach ($this->requisition->details as $key => $detail) {
                $this->product_id[$key] = $detail->product_id;
                $this->qty[$key] = $detail->qty;
                $this->available_qty[$key] = $detail->available_qty;
                $this->price[$key] = $detail->price;
                $this->account[$key] = $detail->account;
                $this->sub_total[$key] = $detail->sub_total;
                $this->budget_head_id[$key] = $detail->budget_head_id;
                $this->budget_sub_head_id[$key] = $detail->budget_sub_head_id;
                // $this->discount[$key] = $detail->discount;
            }
        }
    }

    protected array $rules = [
        'project_id' => 'required',
        'requested_by' => 'required',
        'date' => 'required',
        'title' => 'required',
        'warehouse_id' => 'required',
        'product_id.*' => 'required',
        'available_qty.*' => 'required',
        'qty.*' => 'required',
        'sub_total.*' => 'required',
        'account.*' => 'required',
        'price.*' => 'required',
        'budget_head_id.*' => 'required',
        'budget_sub_head_id.*' => 'required',
        // 'discount.*' => 'nullable',
    ];

    public function updated($name, $value)
    {
        if (str_starts_with($name, 'product_id.')) {
            if (!$value || !$this->project_id || !$this->warehouse_id)
                return;

            $productInfo = $this->stockRepo->getDetailAccordingly($this->project_id, $this->warehouse_id, $value);
            if (!$productInfo) return;

            $targetKey = $this->getTargetKey($name);

            $this->available_qty[$targetKey] = $productInfo->qty;
            $this->price[$targetKey] = $productInfo->product->selling_price;
        }

        if (str_starts_with($name, 'qty.') || str_starts_with($name, 'price.')) {
            $targetKey = $this->getTargetKey($name);

            if (isset($this->price[$targetKey]) && $this->price[$targetKey] && isset($this->qty[$targetKey]) && $this->qty[$targetKey]) {
                $this->sub_total[$targetKey] = ($this->price[$targetKey] * $this->qty[$targetKey]);
            }
        }
    }

    public function submit()
    {
        $this->service->store($this->validate());
        if (!Session::has('error')) {
            $this->dispatchBrowserEvent('notify');
            $this->dispatchBrowserEvent('reload');
            Session::forget('error');
        }
    }

    public function update()
    {
        $this->service->update($this->requisition, $this->validate());
        Session::flash('success');
        return $this->redirectRoute('requisition.create');
    }

    public function render(): Factory|View|Application
    {
        $data = [
            'projects' => $this->projectRepo->getData(),
            'products' => $this->productService->getFormattedDataAsOptGroup(),
            'users' => $this->userRepo->getData(),
            'warehouses' => $this->warehouseRepository->getData(),
            'budgetHead' => $this->budgetHeadRepo->getData(),
            'chartOfAccount' => $this->chartOfAccounts->getData(),
        ];
        return view('livewire.requisition-create', $data);
    }
}
