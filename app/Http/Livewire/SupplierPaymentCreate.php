<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\BankAccount;
use Livewire\WithPagination;
use App\Repositories\ChequeRepository;
use App\Repositories\ProductRepository;
use App\Repositories\ProjectRepository;
use Illuminate\Support\Facades\Session;
use App\Repositories\SupplierRepository;
use App\Services\SupplierPaymentService;
use App\Http\Livewire\Traits\CommonAddMore;
use App\Repositories\BankAccountRepository;
use App\Repositories\RequisitionRepository;
use App\Repositories\PurchaseOrderRepository;
use App\Repositories\SupplierPaymentRepository;
use App\Http\Livewire\Traits\CommonListElements;

class SupplierPaymentCreate extends Component
{

    use WithPagination, CommonListElements, CommonAddMore;

    private string $destroyRoute = 'sale-voucher.destroy';

    private ProjectRepository $projectRepo;
    private SupplierRepository $supplierRepo;
    private PurchaseOrderRepository $purchaseOrderRepo;
    private ChequeRepository $chequeRepo;
    private BankAccountRepository $bankAccRepo;
    private SupplierPaymentService $service;
    private SupplierPaymentRepository $repo;
    private BankAccount $bankAccount;
    private RequisitionRepository $requisitionRepo;
    private ProductRepository $productRepo;

    public function boot(
        ProjectRepository $projectRepository,
        SupplierRepository $supplierRepository,
        PurchaseOrderRepository $purchaseOrderRepository,
        BankAccountRepository $bankAccRepository,
        SupplierPaymentService $service,
        SupplierPaymentRepository $repository,
        BankAccount $bankAccount,
        ChequeRepository $chequeRepository,
        RequisitionRepository  $requisitionRepository,
        ProductRepository  $productRepository,
    ) {
        $this->projectRepo = $projectRepository;
        $this->supplierRepo = $supplierRepository;
        $this->purchaseOrderRepo = $purchaseOrderRepository;
        $this->bankAccRepo = $bankAccRepository;
        $this->service = $service;
        $this->repo = $repository;
        $this->bankAccount = $bankAccount;
        $this->chequeRepo = $chequeRepository;
        $this->requisitionRepo = $requisitionRepository;
        $this->productRepo = $productRepository;

        $this->cheque = [];
        $this->purchaseOrderInfo = false;
    }

    public $record;
    public $project_id;
    public $supplier_id;
    public $date;
    public $purchase_id;
    public $remark;
    public $note;
    public $cash;
    public $bank_account_id;
    public $cheque_id;
    public $cheque;
    public $cheque_amount;
    public $purchaseOrderPrice;
    public $payable;
    public $totalPaid;
    public mixed $purchaseOrderInfo;


    protected array $rules = [
        'project_id'          => 'required',
        'supplier_id'         => 'required',
        'date'                => 'required',
        'purchase_id'     => 'required',
        'remark'        => 'nullable',
        'note'                => 'nullable',
        'cash'                => 'nullable',
        'bank_account_id'                => 'nullable',
        'cheque_id'                => 'nullable',
        'cheque_amount'                => 'nullable',
    ];

    public function mount()
    {
        if ($this->record) {
            $this->record = $this->repo->getRelatedData($this->record, ['payment.history']);

            $this->project_id   = $this->record->project_id;
            $this->supplier_id = $this->record->supplier_id;
            $this->date = $this->record->date;
            $this->purchase_id         = $this->record->purchase_id;
            $this->remark = $this->record->remark;
            $this->note = $this->record->note;

            // purchase Data
            $this->purchaseOrderInfo =  $this->purchaseOrderRepo->getPurchaseProduct($this->record->purchase_id);
            $details = $this->purchaseOrderInfo->details->toArray();
            $this->purchaseOrderPrice = array_sum(data_get($details, '*.sub_total'));

            foreach ($this->purchaseOrderInfo->details as $key => $item) {
                $this->payable = ($item->price * $item->total_receive_qty);
            }
            $supplierPayment = $this->purchaseOrderInfo->supplierPayment;
            foreach ($supplierPayment as $key => $value) {
                $this->totalPaid += $value->payment->amount;
            }
            // purchase Data

            $history = $this->record->payment->history->info;

            $this->cash = $history->cash;
            $this->bank_account_id = $history->bank_account_id;
            $this->cheque_id = $history->cheque_id;
            $this->cheque_amount = $history->cheque_amount;
        }
    }

    public function updated($name, $value)
    {
        if (str_starts_with($name, 'purchase_id')) {
            $this->purchaseOrderInfo =  $this->purchaseOrderRepo->getPurchaseProduct($value);
            $details = $this->purchaseOrderInfo->details->toArray();
            $this->purchaseOrderPrice = array_sum(data_get($details, '*.sub_total'));

            foreach ($this->purchaseOrderInfo->details as $key => $item) {
                $this->payable = ($item->price * $item->total_receive_qty);
            }
            $supplierPayment = $this->purchaseOrderInfo->supplierPayment;
            foreach ($supplierPayment as $key => $value) {
                $this->totalPaid += $value->payment->amount;
            }
            // dd($this->totalPaid);
        }

        if (str_starts_with($name, 'bank_account_id')) {
            $this->cheque =  $this->bankAccRepo->getCheque($value);
        }
    }


    public function update()
    {
        $this->service->update($this->record, $this->validate());
        Session::flash('success');
        return $this->redirectRoute('supplier-payment.create');
    }

    public function render()
    {
        $data = [
            'projects' => $this->projectRepo->getData(),
            'suppliers' => $this->supplierRepo->getData(),
            'purchaseOrder' => $this->purchaseOrderRepo->getData(),
            'bankAccount' => $this->bankAccRepo->getData(),
            'requisitions' => $this->requisitionRepo->getData(),
            'products' => $this->productRepo->getData(),
            'cheque' => $this->cheque,
        ];
        return view('livewire.supplier-payment-create', $data);
    }
}
