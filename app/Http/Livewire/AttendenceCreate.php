<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Traits\CommonAddMore;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\AttendenceRepository;
use App\Repositories\EmployeeRepository;
use App\Services\AttendenceService;
use Livewire\Component;
use Livewire\WithPagination;

class AttendenceCreate extends Component
{
    use WithPagination,CommonListElements,CommonAddMore;
    protected string $destroyRoute = 'attendence.destroy';

    private EmployeeRepository $employeeRepo;
    private AttendenceRepository $attendenceRepo;
    private AttendenceService $attendenceService;

    protected array $addMoreItems =['employee_id','sing_in','sing_out','remark'];

    public $attendenceDate;
    public $attendence;
    public $employee_id;
    public $sing_in;
    public $sing_out;
    public $remark;
    
    public function boot(
        EmployeeRepository $employeeRepo,
        AttendenceRepository $attendenceRepo,
        AttendenceService $attendenceService)
        {
        $this->inputs[] = $this->numberOfItems;
        $this->employeeRepo = $employeeRepo;
        $this->attendenceRepo = $attendenceRepo;
        $this->attendenceService = $attendenceService;
        $targetKey = count($this->inputs) - 1;

        foreach ($this->addMoreItems as $each) {
            $this->{$each}[$targetKey] = null;
        }
    }

    public function mount(){
        if($this->attendence){
            $this->attendence = $this->attendenceRepo->getRelatedData($this->attendence,['details']);
            $this->attendenceDate = $this->attendence->attendenceDate;

            $this->inputs = $this->attendence->details->toArray();
            foreach ($this->attendence->details as $key => $detail) {
                $this->employee_id[$key] = $detail->employee_id;
                $this->sing_in[$key] = $detail->sing_in;
                $this->sing_out[$key] = $detail->sing_out;
                $this->remark[$key] = $detail->remark;
            }
        }
    }

    protected array $rules = [

        'attendenceDate'=> 'nullable',

        'employee_id.*' => 'nullable',
        'sing_in.*' => 'nullable',
        'sing_out.*' => 'nullable',
        'remark.*' => 'nullable',
    ];

    public function submit()
    {
        $this->attendenceService->store($this->validate());
        $this->dispatchBrowserEvent('notify');
        $this->dispatchBrowserEvent('reload');
    }

    public function update()
    {
        $this->attendenceService->update($this->attendence, $this->validate());
        $this->dispatchBrowserEvent('notify');
        $this->redirectRoute('attendence.create');
    }
    
    public function render()
    {
        $data = [
            'e_name' => $this->employeeRepo->getData(),
        ];
        return view('livewire.attendence-create',$data);
    }
}
