<?php

namespace App\Http\Livewire\StudentIncome;

use App\Models\Course;
use Livewire\Component;
use App\Models\StudentIncomeDetail;
use App\Repositories\ProjectRepository;
use App\Repositories\StudentRepository;
use App\Services\StudentIncomeService;

class StudentIncomeOperations extends Component
{
    private ProjectRepository $projectRepo;
    private StudentRepository $studentRepo;
    private StudentIncomeService $service;

    public function boot(ProjectRepository $projectRepo, StudentRepository $studentRepo, StudentIncomeService $service)
    {
        $this->projectRepo = $projectRepo;
        $this->studentRepo = $studentRepo;
        $this->service = $service;
    }

    public string $project_id = "";
    public string $student_id = "";
    public string $date = "";
    public string $course_id = "";
    public string $amount = "";
    public string $type = "";

    // protected $listeners = ['student-operations' => 'studentOperations'];


    protected array $rules = [
        'project_id' => 'required',
        'student_id' => 'required',
        'date' => 'required|date',
        'course_id' => 'required',
        'amount' => 'required|min:1',
    ];

//    protected $listeners = ['show-student-income' => 'showStudentIncome'];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
//        $this->dispatchBrowserEvent('notify');
    }

    public function add()
    {
        $this->service->store($this->validate());
    }

    public function showStudentIncome($studentIncome = [], $mode = 'create', $recordId = 0)
    {
        dd($mode);
    }

    public function store()
    {
    }

    private function formattedCourses($courses): array
    {

    }

    public function render()
    {
        $data = [
            'projects' => $this->projectRepo->getData(),
            'students' => $this->studentRepo->getData(),
            'courses' => $this->formattedCourses(Course::specifyingRelation()->get()),
        ];

        return view('livewire.student-income.student-income-operations', $data);
    }
}
