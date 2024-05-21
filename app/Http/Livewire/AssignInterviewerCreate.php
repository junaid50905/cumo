<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\UserRepository;
use App\Services\AssignInterviewerService;
use App\Http\Livewire\Traits\CommonAddMore;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\AssignInterviewerRepository;
use App\Repositories\AssignTeacherRepository;
use App\Repositories\EmployeeRepository;
use App\Repositories\EmployeeRequisitionRepository;

class AssignInterviewerCreate extends Component
{
    use WithPagination, CommonListElements, CommonAddMore;
    private string $destroyRoute = 'assign-interviewer.destroy';

    private AssignInterviewerService $service;
    private AssignInterviewerRepository $repo;
    private UserRepository $userRepo;
    private EmployeeRequisitionRepository $employeeRequisitionRepo;
    private AssignTeacherRepository $teacherRepo;

    protected array $addMoreItems = ['name', 'subject','date', 'time','interviewer'];

// 

    public $assignInterviewer;
    public $job_title;
    public $subject;
    public $dept_id;
    public $name;
    public $date;
    public $time;
    public $interviewer;

    // 

    public function boot(
        AssignInterviewerService $service,
        AssignInterviewerRepository $repository,
        UserRepository $userRepository,
        EmployeeRequisitionRepository $employeeRequisitionRepo,
        EmployeeRepository $employeeRepo
    ) {
        $this->inputs[] = $this->numberOfItems;
        $this->service = $service;
        $this->repo = $repository;
        $this->employeeRequisitionRepo = $employeeRequisitionRepo;
        $this->userRepo = $userRepository;

        $targetKey = count($this->inputs) - 1;
        foreach ($this->addMoreItems as $each) {
            $this->{$each}[$targetKey] = null;
        }
    }

   

    public function mount()
    {
        if ($this->assignInterviewer) {
            $this->assignInterviewer = $this->repo->getRelatedData($this->assignInterviewer, ['details']);
            $this->job_title = $this->assignInterviewer->job_title;
            $this->dept_id = $this->assignInterviewer->dept_id;


            $this->inputs = $this->assignInterviewer->details->toArray();

            foreach ($this->assignInterviewer->details as $key => $detail) {
                $this->name[$key] = $detail->name;
                $this->subject[$key] = $detail->subject;
                $this->date[$key] = $detail->date;
                $this->time[$key] = $detail->time;
                $this->interviewer[$key] = $detail->interviewer;
            }
        }
    }

    public function updated($name, $value)
        {
            if (str_starts_with($name, 'job_title')) {
                $this->department_setup_id = $this->employeeRequisitionRepo->getDepartmentName($value)->department->department_name;
            }
        }

    protected array $rules = [
        'job_title'     => 'nullable',
        'dept_id'       => 'nullable',

        'name.*'        => 'nullable',
        'subject.*' => 'nullable',
        'date.*'        => 'nullable',
        'time.*'        => 'nullable',
        'interviewer.*' => 'nullable',
    ];

    public function update()
    {
        $this->service->update($this->assignInterviewer, $this->validate());
        $this->dispatchBrowserEvent('notify');
        $this->redirectRoute('assign-interviewer.create');
    }

    public function render()

    {
        $data = [
            'job' => $this->employeeRequisitionRepo->getData(),
        ];
        return view('livewire.assign-interviewer-create', $data);
    }
}
