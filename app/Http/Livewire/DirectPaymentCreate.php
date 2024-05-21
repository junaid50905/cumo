<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Services\DirectPaymentService;
use App\Utility\DirectPaymentConstant;
use App\Repositories\ProjectRepository;
use Illuminate\Support\Facades\Session;
use App\Http\Livewire\Traits\CommonAddMore;
use App\Repositories\BankAccountRepository;
use App\Repositories\PaymentTypeRepository;
use App\Repositories\DirectPaymentRepository;
use App\Http\Livewire\Traits\CommonListElements;

class DirectPaymentCreate extends Component
{

    use WithPagination, CommonListElements, CommonAddMore;

    private string $destroyRoute = 'direct-payment.destroy';


    private ProjectRepository $projectRepo;
    private PaymentTypeRepository $PayTypeRepo;
    private BankAccountRepository $bankAccRepo;
    private DirectPaymentService $service;
    private DirectPaymentRepository $repo;

    public function boot(
        ProjectRepository $projectRepo,
        PaymentTypeRepository $PayTypeRepo,
        BankAccountRepository $bankAccRepository,
        DirectPaymentService $service,
        DirectPaymentRepository $repository,
    ) {
        $this->bankAccRepo = $bankAccRepository;
        $this->service = $service;
        $this->repo = $repository;
        $this->PayTypeRepo = $PayTypeRepo;
        $this->projectRepo = $projectRepo;
    }

    public $record;
    public $project_id;
    public $payment_type;
    public $from_account;
    public $to_account;
    public $amount;
    public $note;


    protected array $rules = [
        'project_id'          => 'required',
        'payment_type'         => 'required',
        'from_account'                => 'nullable',
        'to_account'     => 'nullable',
        'amount'        => 'required',
        'note'                => 'nullable',
    ];


    public function mount()
    {
        if ($this->record) {
            $this->record = $this->repo->getRelatedData($this->record, ['project']);

            $this->project_id   = $this->record->project_id;
            $this->payment_type_id = $this->record->payment_type_id;
            $this->from_account = $this->record->from_account;
            $this->to_account         = $this->record->to_account;
            $this->amount = $this->record->amount;
            $this->note = $this->record->note;
        }
    }

    public function update()
    {
        $this->service->update($this->record, $this->validate());
        Session::flash('success');
        return $this->redirectRoute('direct-payment.create');
    }

    public function render()
    {

        $data = [
            'paymentType' => DirectPaymentConstant::$paymentType,
            'projects' => $this->projectRepo->getData(),
            'bankAccount' => $this->bankAccRepo->getData(),
        ];
        return view('livewire.direct-payment-create', $data);
    }
}
