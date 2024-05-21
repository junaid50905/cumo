<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Services\ProductService;
use Illuminate\Contracts\View\View;
use App\Services\SaleVoucherService;
use App\Repositories\StockRepository;
use App\Repositories\IncomeRepository;
use Illuminate\Contracts\View\Factory;
use App\Repositories\ProductRepository;
use App\Repositories\ProjectRepository;
use Illuminate\Support\Facades\Session;
use App\Repositories\CategoryRepository;
use App\Repositories\CustomerRepository;
use App\Repositories\WarehouseRepository;
use App\Http\Livewire\Traits\CommonAddMore;
use App\Http\Livewire\Traits\CommonListElements;
use Illuminate\Contracts\Foundation\Application;

class SaleVoucherCreate extends Component
{
    use WithPagination, CommonListElements, CommonAddMore;

    private string $destroyRoute = 'sale-voucher.destroy';

    private ProjectRepository $projectRepo;
    private CustomerRepository $customerRepo;
    private WarehouseRepository $warehouseRepo;
    private CategoryRepository $categoryRepo;
    private ProductRepository $productRepo;
    private ProductService $productService;
    private IncomeRepository $repo;
    private StockRepository $stockRepo;
    private SaleVoucherService $service;
    protected array $addMoreItems = ['product_id', 'available_qty', 'qty', 'sub_total', 'price', 'discount'];

    public $customer_id;
    public $ship_to_address;
    public $record;
    public $cash;
    public $cheque;
    public $cheque_amount;
    public $cheque_no;
    public $cheque_account_no;
    public $cheque_account_name;
    public $cheque_bank_name;
    public $card;
    public $card_amount;
    public $card_no;
    public $card_name;
    public $card_type;
    public $total_discount;
    public $total_item;
    public $total_cost;
    public $total_paid;

    public function boot(
        ProjectRepository $projectRepository,
        CustomerRepository $customerRepository,
        WarehouseRepository $warehouseRepository,
        CategoryRepository $categoryRepository,
        ProductRepository $productRepository,
        ProductService $productService,
        IncomeRepository $repo,
        StockRepository $stockRepository,
        SaleVoucherService $service,
    ) {
        $this->projectRepo    = $projectRepository;
        $this->customerRepo   = $customerRepository;
        $this->warehouseRepo  = $warehouseRepository;
        $this->categoryRepo   = $categoryRepository;
        $this->productRepo    = $productRepository;
        $this->productService = $productService;
        $this->repo           = $repo;
        $this->stockRepo      = $stockRepository;
        $this->service        = $service;
        $this->inputs[]       = $this->numberOfItems;

        $targetKey = count($this->inputs) - 1;
        foreach ($this->addMoreItems as $each) {
            $this->{$each}[$targetKey] = null;
        }
    }

    protected array $rules = [
        'project_id'          => 'required',
        'customer_id'         => 'required',
        'date'                => 'nullable',
        'ship_to_address'     => 'required',
        'warehouse_id'        => 'required',
        'note'                => 'nullable',
        'cash'                => 'nullable',
        'cheque'              => 'nullable',
        "cheque_amount"       => 'nullable',
        "cheque_no"           => 'nullable',
        "cheque_account_no"   => 'nullable',
        "cheque_account_name" => 'nullable',
        "cheque_bank_name"    => 'nullable',
        "card"                => "nullable",
        "card_amount"         => 'nullable',
        "card_no"             => 'nullable',
        "card_name"           => 'nullable',
        "card_type"           => 'nullable',
        'product_id.*'        => 'required',
        'available_qty.*'     => 'required',
        'qty.*'               => 'required',
        'sub_total.*'         => 'required',
        'price.*'             => 'required',
        'discount.*'          => 'nullable',
    ];


    public function mount()
    {
        if ($this->record) {
            // $this->mode = 'edit';
            $this->record = $this->repo->getRelatedData($this->record, ['saleIncome.warehouse', 'saleIncome.details.product', 'project', 'history', 'creator']);

            $this->project_id   =  $this->record->project_id;
            $this->customer_id = $this->record->saleIncome->customer_id;
            $this->ship_to_address = $this->record->saleIncome->ship_to_address;
            $this->date         = $this->record->date;
            $this->warehouse_id = $this->record->saleIncome->warehouse_id;
            $this->note = $this->record->note;
            $history = $this->record->history->info;

            $this->cash = $history->cash;
            $this->cheque = $history->cheque;
            $this->cheque_account_name = $history->cheque_account_name;
            $this->cheque_account_no = $history->cheque_account_no;
            $this->cheque_amount = $history->cheque_amount;
            $this->cheque_bank_name = $history->cheque_bank_name;
            $this->cheque_no = $history->cheque_no;

            $this->card = $history->card;
            $this->card_name = $history->card_name;
            $this->card_no = $history->card_no;
            $this->card_amount = $history->card_amount;
            $this->card_type = $history->card_type;

            $this->inputs = $this->record->saleIncome->details->toArray();

            foreach ($this->record->saleIncome->details as $key => $detail) {
                $this->product_id[$key]    = $detail->product_id;
                $this->qty[$key]           = $detail->qty;
                $this->available_qty[$key] = $detail->available_qty;
                $this->price[$key]         = $detail->price;
                $this->sub_total[$key]     = $detail->sub_total;
                $this->discount[$key]      = $detail->discount;

                $this->total_discount += $detail->discount;
                $this->total_item += 1;
                $this->total_cost += $detail->sub_total;
            }

            $this->total_paid = $history->card_amount ?? 0 + $history->cash ?? 0  + $history->cheque_amount ?? 0;

        }
    }

    public function updated($name, $value)
    {

        $this->validateOnly($name);

        if (str_starts_with($name, 'product_id.')) {
            if (!$value || !$this->project_id || !$this->warehouse_id) {
                $this->dispatchBrowserEvent('notify', ['type' => 'error', 'message' => 'Sorry no related product found']);
                return;
            }

            $productInfo = $this->stockRepo->getDetailAccordingly($this->project_id, $this->warehouse_id, $value);
            if (!$productInfo)
                return;

            $targetKey = $this->getTargetKey($name);

            $this->available_qty[$targetKey] = $productInfo->qty;
            $this->price[$targetKey]         = $productInfo->product->selling_price;
        }

        if (str_starts_with($name, 'qty.') || str_starts_with($name, 'discount.')) {
            $targetKey = $this->getTargetKey($name);

            if (!isset($this->available_qty[$targetKey]) or !$this->available_qty[$targetKey])
                return;

            if (isset($this->price[$targetKey]) && $this->price[$targetKey] && isset($this->qty[$targetKey]) && $this->qty[$targetKey]) {
                $this->sub_total[$targetKey] = ($this->price[$targetKey] * $this->qty[$targetKey]) - (int)($this->discount[$targetKey] ?? 0);
            }

            $this->total_discount = $this->discount ? array_sum($this->discount) : 0;
            $this->total_item = $this->qty ? array_sum($this->qty) : 0;
            $this->total_cost = $this->sub_total ? array_sum($this->sub_total) : 0;
        }
    }

    public function update()
    {
        $this->service->update($this->record, $this->validate());
        Session::flash('success');
        return $this->redirectRoute('sale-voucher.create');
    }

    public function render(): Factory|View|Application
    {
        $data = [
            'projects'   => $this->projectRepo->getData(),
            'customers'  => $this->customerRepo->getData(),
            'warehouses' => $this->warehouseRepo->getData(),
            'products'   => $this->productService->getFormattedDataAsOptGroup(),
        ];
        return view('livewire.sale-voucher-create', $data);
    }
}
