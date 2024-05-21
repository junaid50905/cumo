<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\ChartofAccounts;
use App\Services\CourseService;
use App\Repositories\CourseRepository;
use Illuminate\Support\Facades\Session;
use App\Http\Livewire\Traits\CommonAddMore;
use App\Repositories\BankAccountRepository;
use App\Repositories\ChartofAccountsRepository;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\CourseFeeHeaderRepository;

class CourseCreate extends Component
{
    use WithPagination, CommonListElements, CommonAddMore;
    private CourseService $service;
    private CourseRepository $repo;
    private BankAccountRepository $bankAccountRepo;
    private ChartofAccountsRepository $chartOfAccRepo;
    private CourseFeeHeaderRepository $courseFeeHeaderRepo;

    protected array $addMoreItems = ['fee_heading', 'account_id', 'amount'];

    public function boot(
        CourseService $service,
        CourseRepository $repository,
        BankAccountRepository $bankAccountRepo,
        ChartofAccountsRepository $chartOfAccRepo,
        CourseFeeHeaderRepository $courseFeeHeaderRepo,
    ) {
        $this->inputs[] = $this->numberOfItems;
        $this->service = $service;
        $this->repo = $repository;
        $this->bankAccountRepo = $bankAccountRepo;
        $this->chartOfAccRepo = $chartOfAccRepo;
        $this->courseFeeHeaderRepo = $courseFeeHeaderRepo;

        $targetKey = count($this->inputs) - 1;
        foreach ($this->addMoreItems as $each) {
            $this->{$each}[$targetKey] = null;
        }
    }

    public $course;
    public $name;
    public $cash_account_id;
    public $duration;
    public $description;
    public $fee_heading;
    public $account_id;
    public $amount;

    protected array $rules =  [
        'name' => 'required',
        'cash_account_id'   => 'required',
        'duration' => 'nullable',
        'description' => 'nullable',
        'fee_heading.*' => 'required',
        'account_id.*'  => 'nullable',
        'amount.*'  => 'required',
    ];

    public function submit()
    {
        $this->service->store($this->validate());
        $this->dispatchBrowserEvent('notify');
        $this->dispatchBrowserEvent('reload');
    }


    public function mount()
    {
        if ($this->course) {

            $this->course = $this->repo->getRelatedData($this->course, ['details']);
            $this->name = $this->course->name;
            $this->duration = $this->course->duration;
            $this->cash_account_id = $this->course->cash_account_id;
            $this->description = $this->course->description;
            $this->inputs = $this->course->details->toArray();

            foreach ($this->course->details as $key => $detail) {
                $this->fee_heading[$key] = $detail->fee_heading;
                $this->account_id[$key] = $detail->account_id;
                $this->amount[$key] = $detail->amount;
            }
        }
    }

    public function update()
    {
        $this->service->update($this->course, $this->validate());
        $this->dispatchBrowserEvent('notify');
        $this->redirectRoute('course.create');
    }


    public function render()
    {
        $data = [
            'bankAccount' =>$this->chartOfAccRepo->getData(),
            'courseFeeHeading' =>$this->courseFeeHeaderRepo->getData(),
        ];
        return view('livewire.course-create',$data);

    }
}
