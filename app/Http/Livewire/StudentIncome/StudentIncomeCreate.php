<?php

namespace App\Http\Livewire\StudentIncome;

use Livewire\Component;
use Livewire\WithPagination;
use App\Services\CourseService;
use App\Repositories\UserRepository;
use App\Repositories\CourseRepository;
use App\Services\StudentIncomeService;
use App\Repositories\ProjectRepository;
use App\Repositories\StudentRepository;
use App\Http\Livewire\Traits\CommonAddMore;
use App\Repositories\CaseHistoryRepository;
use App\Repositories\StudentIncomeRepository;
use App\Http\Livewire\Traits\CommonListElements;

class StudentIncomeCreate extends Component
{
    use WithPagination, CommonListElements, CommonAddMore;


    public $project_id;
    public $student_id;
    public $date;
    public $course_id;
    public $amount;
    public $studentIncome;

    private string $destroyRoute = 'student-income.destroy';
    private UserRepository $userRepo;
    private ProjectRepository $projectRepo;
    private StudentRepository $studentRepo;
    private CaseHistoryRepository $caseRepo;
    private CourseService $courseService;
    private CourseRepository $courseRepo;
    private StudentIncomeRepository $repo;
    private StudentIncomeService $service;
    protected array $addMoreItems = ['course_id', 'amount'];

    public function boot(
        StudentIncomeService $service,
        UserRepository $userRepository,
        ProjectRepository $projectRepository,
        StudentRepository $studentRepository,
        CaseHistoryRepository $caseHistoryRepository,
        StudentIncomeRepository $studentIncomeRepository,
        CourseService $courseService,
        CourseRepository $courseRepository,
    ) {
        $this->userRepo = $userRepository;
        $this->projectRepo = $projectRepository;
        $this->studentRepo = $studentRepository;
        $this->caseRepo = $caseHistoryRepository;
        $this->courseService = $courseService;
        $this->repo = $studentIncomeRepository;
        $this->service = $service;
        $this->courseRepo = $courseRepository;


        $this->inputs[] = $this->numberOfItems;
        $targetKey = count($this->inputs) - 1;
        foreach ($this->addMoreItems as $each) {
            $this->{$each}[$targetKey] = null;
        }
    }


    protected array $rules = [
        'project_id' => 'required',
        'student_id' => 'required',
        'date' => 'nullable',
        'course_id.*' => 'required',
        'amount.*' => 'required',
    ];


    public function mount()
    {
        if ($this->studentIncome) {

            $this->project_id = $this->studentIncome->income->project_id;
            $this->student_id = $this->studentIncome->student_id;
            $this->date = $this->studentIncome->income->date;

            $this->inputs = $this->studentIncome->incomeDetails->toArray();

            foreach ($this->studentIncome->incomeDetails as $key => $detail) {
                $this->course_id[$key] = $detail->course_id;
                $this->amount[$key] = $detail->amount;
            }
        }
    }


    public function update()
    {
        $this->service->update($this->studentIncome, $this->validate());
        $this->dispatchBrowserEvent('notify');
        $this->redirectRoute('student-income.create');
    }



    public function render()
    {
        // dd('livewire');
        $data = [
            'projects' => $this->projectRepo->getData(),
            'students' => $this->studentRepo->getData(),
            'courses' => $this->courseService->getFormattedDataAsOptGroup(),
        ];

        return view('livewire.student-income.student-income-create', $data);
    }
}
