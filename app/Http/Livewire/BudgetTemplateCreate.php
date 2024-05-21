<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\ProjectRepository;
use App\Services\BudgetTemplateService;
use App\Repositories\BudgetHeadRepository;
use App\Http\Livewire\Traits\CommonAddMore;
use App\Repositories\BankAccountRepository;
use App\Repositories\BudgetTemplateRepository;
use App\Http\Livewire\Traits\CommonListElements;

class BudgetTemplateCreate extends Component
{
    use WithPagination, CommonListElements, CommonAddMore;

    private BudgetTemplateService $service;
    private BudgetTemplateRepository $repo;
    private ProjectRepository $projectRepo;
    private BudgetHeadRepository $userRepo;
    private BankAccountRepository $bankRepo;
    private  BudgetHeadRepository $budgetHeadRepo;
    protected array $addMoreItems = ['budget_head', 'account_id', 'note'];

    public function boot(
        BankAccountRepository $bankAccountingRepo,
        ProjectRepository $projectRepository,
        BudgetTemplateService $service,
        BudgetTemplateRepository $repository,
        BudgetHeadRepository $budgetHeadRepo,
    ) {
        $this->inputs[] = $this->numberOfItems;
        $this->bankRepo = $bankAccountingRepo;
        $this->repo = $repository;
        $this->service = $service;
        $this->projectRepo = $projectRepository;
        $this->budgetHeadRepo = $budgetHeadRepo;

        $targetKey = count($this->inputs) - 1;
        foreach ($this->addMoreItems as $each) {
            $this->{$each}[$targetKey] = null;
        }
    }

    public $budgetTemplate;
    public $project_id;
    public $title;
    public $budget_head;
    public $account_id;
    public $note;

    protected array $rules = [
        'project_id' => 'nullable',
        'title' => 'nullable',
        'budget_head.*' => 'nullable',
        'account_id.*' => 'nullable',
        'note.*' => 'nullable',
    ];


    public function submit()
    {
        $this->service->store($this->validate());
        $this->dispatchBrowserEvent('notify');
        $this->dispatchBrowserEvent('reload');
    }

    public function mount()
    {
        if ($this->budgetTemplate) {
            $this->budgetTemplate = $this->repo->getRelatedData($this->budgetTemplate, ['details']);
            $this->project_id = $this->budgetTemplate->project_id;
            $this->title = $this->budgetTemplate->title;

            $this->inputs = $this->budgetTemplate->details->toArray();

            foreach ($this->budgetTemplate->details as $key => $detail) {
                $this->budget_head[$key] = $detail->budget_head;
                $this->account_id[$key] = $detail->account_id;
                $this->note[$key] = $detail->note;
            }
        }
    }



    public function update()
    {
        $this->service->update($this->budgetTemplate, $this->validate());
        $this->dispatchBrowserEvent('notify');
        $this->redirectRoute('budget-template.create');
    }



    public function render()
    {

        $data = [
            'projects' => $this->projectRepo->getData(),
            'budgetHead' => $this->budgetHeadRepo->getData(),
            'account' => $this->bankRepo->getData(),
        ];
        return view('livewire.budget-template-create',$data);
    }
}
