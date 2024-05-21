<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Rules\JournalRule;
use Livewire\WithPagination;
use App\Services\JournalService;
use App\Repositories\JournalRepository;
use App\Repositories\ProjectRepository;
use Illuminate\Support\Facades\Session;
use App\Http\Livewire\Traits\CommonAddMore;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\ChartofAccountsRepository;

class JournalCreate extends Component
{
    use WithPagination, CommonListElements, CommonAddMore;

    public $project_id;
    public $transaction_amount;
    public $voucher_date;
    public $particulars;
    public $reference;
    public $account_no;
    public $account_particulars;
    public $debit;
    public $credit;
    public $journal;

    private string $destroyRoute = 'journal.destroy';
    private ProjectRepository $projectRepo;
    private JournalRepository $repo;
    private ChartofAccountsRepository $chartOfAccountsRepo;
    private JournalService $service;
    protected array $addMoreItems = ['account_no', 'account_particulars', 'debit', 'credit'];

    public function boot(
        ProjectRepository $projectRepository,
        JournalRepository $repo,
        JournalService $service,
        ChartofAccountsRepository $chartOfAccountsRepo
    ) {
        $this->projectRepo = $projectRepository;
        $this->repo = $repo;
        $this->chartOfAccountsRepo = $chartOfAccountsRepo;
        $this->service = $service;

        $this->inputs[] = $this->numberOfItems;

        $targetKey = count($this->inputs) - 1;
        foreach ($this->addMoreItems as $each) {
            $this->{$each}[$targetKey] = null;
        }
    }

    protected array $rules = [
        'project_id' => 'required',
        'transaction_amount' => 'required',
        'voucher_date' => 'nullable',
        'particulars' => 'nullable',
        'reference' => 'nullable',
        'account_no.*' => 'required',
        'account_particulars.*' => 'nullable',
        'debit.*' => 'nullable',
        'credit.*' => 'nullable',
    ];


    public function mount()
    {
        if ($this->journal) {

            $this->project_id = $this->journal->project_id;
            $this->transaction_amount = $this->journal->transaction_amount;
            $this->voucher_date = $this->journal->voucher_date;
            $this->particulars = $this->journal->particulars;
            $this->reference = $this->journal->reference;

            $this->inputs = $this->journal->details->toArray();

            foreach ($this->journal->details as $key => $detail) {
                $this->account_no[$key] = $detail->account_no;
                $this->account_particulars[$key] = $detail->account_particulars;
                $this->debit[$key] = $detail->debit;
                $this->credit[$key] = $detail->credit;
            }
        }
    }

    public function update()
    {
        $this->service->update($this->journal, $this->validate());
        Session::flash('success');
        $this->redirectRoute('journal.create');
    }

    public function submit()
    {
        $requestData = request()->all('serverMemo')['serverMemo']['data'];

        if (!$this->service->checkForValidTransaction($requestData)) {
            return $this->addError('transaction_amount', 'Transaction amount mitch match');
        }

        $this->service->store($this->validate());
        $this->dispatchBrowserEvent('notify');
        $this->dispatchBrowserEvent('reload');
    }



    // public function updated($name, $value)
    // {
    // if (str_starts_with($name, 'debit') | str_starts_with($name, 'credit')) {
    //     $key = explode('.',$name);
    //     // dump('credit.'.$key[1]);
    //     if($name == 'credit.'.$key[1]){
    //         return $this->addError($name, 'message');
    //     }
    //     // dd($key[0]);
    // }

    // if (str_starts_with($name, 'bank_account_id')) {
    //     $detail =  $this->bankAccRepo->getCheque($value);
    //     $this->cheque =  $detail->chequeBook;
    // }
    // }

    public function render()
    {
        $data = [
            'projects' => $this->projectRepo->getData(),
            'account_codes' => $this->chartOfAccountsRepo->getData(),
        ];
        return view('livewire.journal-create', $data);
    }
}
