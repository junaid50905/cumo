<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Livewire\Traits\CommonAddMore;
use App\Http\Livewire\Traits\CommonListElements;
use App\Services\LeaveApplicationService;
use App\Repositories\LeaveApplicationRepository;
use App\Models\Employee;
use App\Models\LeaveType;

class LeaveApplicationDetails extends Component
{   
    use CommonListElements, CommonAddMore;

    private LeaveApplicationService $service;
    private LeaveApplicationRepository $repo;
    
    protected array $addMoreItems = ['type', 'start_date', 'end_date', 'duration', 'is_houe', 'avl_time', 'half_day', 'hour'];
    
    public $leave_application;
    public $reason;
    public $employee_id;
    public $support_employee_id;
    public $duration_in_days;
    public $duration_in_hours;
    public $address_at_leave;
    public $phone_at_leave;
    public $leave_type_id;
    public $available_leave_ttachment;
   
    public $type;
    public $start_date;
    public $end_date;
    public $duration;
    public $is_houe;
    public $avl_time;
    public $half_day;
    public $hour;

    public function boot(LeaveApplicationService $service, LeaveApplicationRepository $repo){ 
        $this->service = $service;
        $this->repo = $repo;
        $this->inputs[] = $this->numberOfItems;
        $targetKey = count($this->inputs) - 1;
        foreach ($this->addMoreItems as $each) {
            $this->{$each}[$targetKey] = null;
        }
    }
    
    protected array $rules =  [
        'type.*' => 'required',
        'start_date.*' => 'required',
        'end_date.*' => 'required',
        'duration.*' => 'required',
        'is_houe.*' => 'required',
        'avl_time.*' => 'required',
        'half_day.*' => 'required',
        'hour.*' => 'required',
        'reason' => 'required',
        'employee_id' => 'required',
        'support_employee_id' => 'required',
        'duration_in_days' =>'required',
        'duration_in_hours' =>'required',
        'address_at_leave' => 'required',
        'phone_at_leave' => 'required',
        'available_leave_ttachment' =>'nullable',
        'leave_type_id' => 'required'
    ];


    public function submit()
    {  
        $this->service->store($this->validate());
        $this->dispatchBrowserEvent('notify');
        $this->dispatchBrowserEvent('reload');
    }
    
    public function mount()
    {
        if ($this->leave_application) {

            $this->leave_application = $this->repo->getRelatedData($this->leave_application, ['details']);
            $this->reason = $this->leave_application->reason;
            $this->employee_id = $this->leave_application->employee_id;
            $this->support_employee_id = $this->leave_application->support_employee_id;
            $this->duration_in_hours = $this->leave_application->duration_in_days;
            $this->duration_in_hours = $this->leave_application->duration_in_hours;
            $this->address_at_leave = $this->leave_application->address_at_leave;
            $this->phone_at_leave = $this->leave_application->phone_at_leave;
            $this->leave_type_id = $this->leave_application->leave_type_id;
            $this->duration_in_hours = $this->leave_application->duration_in_hours;
            $this->available_leave_ttachment = $this->leave_application->available_leave_ttachment;
            $this->inputs = $this->leave_application->details->toArray();

            foreach ($this->leave_application->details as $key => $detail) {
                $this->type[$key] = $detail->type;
                $this->start_date[$key] = $detail->start_date;
                $this->end_date[$key] = $detail->end_date;
                $this->duration[$key] = $detail->duration;
                $this->is_houe[$key] = $detail->is_houe;
                $this->avl_time[$key] = $detail->avl_time;
                $this->half_day[$key] = $detail->half_day;
                $this->hour[$key] = $detail->hour;
            }
        }
    }

    public function update()
    {
        $this->service->update($this->leave_application, $this->validate());
        $this->dispatchBrowserEvent('notify');
        $this->redirectRoute('HR.leave-application.create');
    }

    public function render()
    {   
        $employees = Employee::pluck('name', 'id');
        $leave_types = LeaveType::all();
        return view('livewire.leave-application-details', compact('employees', 'leave_types'));
    }
}
