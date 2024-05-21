<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Requisition;
use Livewire\WithPagination;
use App\Services\ProductService;
use Illuminate\Contracts\View\View;
use App\Services\PurchaseOrderService;
use Illuminate\Contracts\View\Factory;
use App\Repositories\ProjectRepository;
use App\Repositories\SupplierRepository;
use App\Http\Livewire\Traits\CommonAddMore;
use App\Repositories\RequisitionRepository;
use App\Repositories\PurchaseOrderRepository;
use App\Http\Livewire\Traits\CommonListElements;
use Illuminate\Contracts\Foundation\Application;

class PurchaseOrderCreate extends Component
{
    use WithPagination, CommonListElements, CommonAddMore;

    public $requisition;
    public $requisition_id;
    public $supplier_id;
    public $date;
    public $exp_date;
    public $discount;
    public array $vat;

    private PurchaseOrderRepository $repo;
    private PurchaseOrderService $service;
    private ProjectRepository $projectRepo;
    private SupplierRepository $supplierRepo;
    private ProductService $productService;
    private RequisitionRepository $requisitionRepo;
    protected array $addMoreItems = ['product_id','exp_date','available_qty','qty','price','vat','discount','sub_total'];

    public function boot(
        PurchaseOrderService $service,
        PurchaseOrderRepository $repository,
        ProjectRepository $projectRepository,
        SupplierRepository $supplierRepository,
        ProductService $productService,
        RequisitionRepository $requisitionRepository,
    ) {
        $this->service = $service;
        $this->repo = $repository;
        $this->projectRepo = $projectRepository;
        $this->supplierRepo = $supplierRepository;
        $this->productService = $productService;
        $this->requisitionRepo = $requisitionRepository;
        $this->inputs[] = $this->numberOfItems;
        $this->requisition_id = null;
    }

    public function mount()
    {
        if ($this->requisition && $this->requisition->id) {
            $this->project_id = $this->requisition->project_id;
            $this->requisition_id = $this->requisition->id;
            $this->inputs = $this->requisition->details->toArray();

            foreach ($this->requisition->details as $key => $detail) {
                $this->product_id[$key] = $detail->product_id;
                $this->qty[$key] = $detail->qty;
                $this->available_qty[$key] = $detail->available_qty;
                $this->price[$key] = $detail->price;
                $this->vat[$key] = $detail->vat ?? 0;
                $this->discount[$key] = $detail->discount ?? 0;
                $this->sub_total[$key] = $detail->sub_total ?? 0;
            }
        }
    }

    protected array $rules = [
        'project_id' => 'required',
        'requisition_id' => 'nullable',
        'supplier_id' => 'nullable',
        'date' => 'required',
        'note' => 'nullable',

        'vat.*' => 'required',
        'product_id.*' => 'required',
        'exp_date.*' => 'required',
        'available_qty.*' => 'required',
        'qty.*' => 'required',
        'price.*' => 'nullable',
        'discount.*' => 'nullable',
        'sub_total.*' => 'nullable',
    ];

    public function updated($name, $value)
    {
        if (str_starts_with($name, 'vat.')) {
            $targetKey = $this->getTargetKey($name);
            if ($this->price[$targetKey] && $this->qty[$targetKey]) {
                $this->sub_total[$targetKey] = ($this->price[$targetKey] * $this->qty[$targetKey]) - ($this->discount[$targetKey] ?? 0);
                if ($value) {
                    $this->sub_total[$targetKey] += $this->sub_total[$targetKey] * ($this->vat[$targetKey] / 100);
                }
            }
        }
        if ($name === 'requisition_id') {
            return $this->redirectRoute('purchase-order.create', $value);
        }
    }

    public function submit()
    {
        if ($this->requisition->purchase) {
            $this->dispatchBrowserEvent('notify', ['type' => 'error', 'message' => 'A purchase order already enlisted for this requisition']);
            return $this->redirectRoute('purchase-order.create');
        }

        $this->service->store($this->validate());
        $this->dispatchBrowserEvent('notify');
        $this->dispatchBrowserEvent('reload');
        return $this->redirectRoute('purchase-order.create');
    }

    public function render(): Factory|View|Application
    {
        $data = [
            'projects' => $this->projectRepo->getData(),
            'suppliers' => $this->supplierRepo->getData(),
            'products' => $this->productService->getFormattedDataAsOptGroup(),
            'requisitions' => $this->requisitionRepo->getApprovedList(),
        ];

        return view('livewire.purchase-order-create', $data);
    }
}
