<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Utility\JobTitleConstant;
use App\Services\JobContactService;
use App\Repositories\StudentRepository;
use App\Repositories\JobContactRepository;
use App\Http\Livewire\Traits\CommonAddMore;
use App\Repositories\DepartmentSetupRepository;
use App\Http\Livewire\Traits\CommonListElements;

class JobContactCreate extends Component
{
    use WithPagination, CommonListElements, CommonAddMore;

    private DepartmentSetupRepository $departmentRepo;
    private StudentRepository $studentRepo;
    private JobContactRepository $jobContactRepo;
    private JobContactService $service;
    protected array $addMoreItems = ['basic_salary', 'house_allowence', 'medical_allowance','total'];

    public $jobContact;
    public $job_title;
    public $department;
    public $department_name;
    public $student;
    public $basic_salary;
    public $house_allowence;
    public $medical_allowance;
    public $total;
    public $workStation;
    public $start_date;
    public $log;
    public $applicant_name;
    public $requsition;
   

    public function boot(
        DepartmentSetupRepository $departmentRepo,
        StudentRepository $studentRepo,
        JobContactRepository $jobContactRepo,
        JobContactService $service
    ) {
        $this->inputs[] = $this->numberOfItems;
        $this->departmentRepo = $departmentRepo;
        $this->studentRepo = $studentRepo;
        $this->jobContactRepo = $jobContactRepo;
        $this->service = $service;
        $targetKey = count($this->inputs) - 1;

        foreach ($this->addMoreItems as $each) {
            $this->{$each}[$targetKey] = null;
        }
    }
    
    public function mount(){
        if($this->jobContact){
            $this->jobContact = $this->jobContactRepo->getRelatedData($this->jobContact,['details']);
            $this->job_title = $this->jobContact->job_title;
            $this->department = $this->jobContact->department;
            $this->applicant_name = $this->jobContact->applicant_name;
            $this->workStation = $this->jobContact->workStation;
            $this->start_date = $this->jobContact->start_date;
            $this->log = $this->jobContact->log;

            $this->inputs = $this->jobContact->details->toArray();

            foreach ($this->jobContact->details as $key => $detail) {
                $this->basic_salary[$key] = $detail->basic_salary;
                $this->house_allowence[$key] = $detail->house_allowence;
                $this->medical_allowance[$key] = $detail->medical_allowance;
                $this->total[$key] = $detail->total;
            }
            
        }
    }

    protected array $rules = [
        'job_title' => 'required',
        'department' => 'required',
        'applicant_name' => 'required',
        'workStation' => 'required',
        'start_date' => 'required',
        'log' => 'required',

        'basic_salary.*' => 'required',
        'house_allowence.*' => 'required',
        'medical_allowance.*' => 'required',
        'total.*' => 'required',
    ];

    public function updated($name)
    {
        if (str_starts_with($name, 'basic_salary.') || str_starts_with($name, 'house_allowence.') || 
        str_starts_with($name, 'medical_allowance.')) {
            $targetKey = $this->getTargetKey($name);

            if (isset($this->basic_salary[$targetKey]) && $this->basic_salary[$targetKey] && isset($this->house_allowence[$targetKey]) && $this->house_allowence[$targetKey]
            && isset($this->medical_allowance[$targetKey]) && $this->medical_allowance[$targetKey]) {
                $this->total[$targetKey] = ($this->basic_salary[$targetKey] + $this->house_allowence[$targetKey]
                + $this->medical_allowance[$targetKey]);
            }
        }
    }

    public function submit()
    {
        $this->service->store($this->validate());
        $this->dispatchBrowserEvent('notify');
        $this->dispatchBrowserEvent('reload');
    }
    
    public function update()
    {
        $this->service->update($this->jobContact, $this->validate());
        $this->dispatchBrowserEvent('notify');
        $this->redirectRoute('job-contact.create');
    }
    
    public function render()
    {
        $data = [
            'job' => JobTitleConstant::$jobTitle,
            'd_name' => $this->departmentRepo->getData(),
            's_name' => $this->studentRepo->getData(),
        ];
        return view('livewire.job-contact-create',$data);
    }
}
