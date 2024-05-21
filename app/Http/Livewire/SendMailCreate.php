<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Services\SendMailService;
use App\Repositories\SendMailRepository;
use App\Http\Livewire\Traits\CommonAddMore;
use App\Repositories\DepartmentSetupRepository;
use App\Http\Livewire\Traits\CommonListElements;
use App\Mail\NotifyMail;
use App\Repositories\EmployeeRequisitionRepository;
use Illuminate\Support\Facades\Mail;

class SendMailCreate extends Component
{
    use WithPagination, CommonListElements, CommonAddMore;

    private SendMailRepository $repo;
    private DepartmentSetupRepository $departmentRepo;
    private EmployeeRequisitionRepository $employeeRequisitionRepo;
    private SendMailService $service;

    protected array  $addMoreItems = ['to', 'subject', 'date', 'time', 'logs'];

    public $to;
    public $subject;
    public $date;
    public $time;
    public $logs;
    public $job_title;
    public $department;
    public $sendMail;
    public $department_setup_id;

    public function boot(
        SendMailRepository $repo,
        DepartmentSetupRepository $departmentRepo,
        SendMailService $service,
        EmployeeRequisitionRepository $employeeRequisitionRepo
    ) {
        $this->inputs[] = $this->numberOfItems;
        $this->departmentRepo = $departmentRepo;
        $this->employeeRequisitionRepo = $employeeRequisitionRepo;
        $this->repo = $repo;
        $this->service = $service;
        $targetKey = count($this->inputs) - 1;

        foreach ($this->addMoreItems as $each) {
            $this->{$each}[$targetKey] = null;
        }
    }

    public function mount()
    {
        if ($this->sendMail) {
            $this->sendMail = $this->repo->getRelatedData($this->sendMail, ['details']);
            $this->job_title = $this->sendMail->job_title;
            // $this->department_name = $this->sendMail->department_name;
            $this->logs = $this->sendMail->logs;

            $this->inputs = $this->sendMail->details->toArray();

            foreach ($this->sendMail->details as $key => $detail) {
                $this->to[$key] = $detail->to;
                $this->subject[$key] = $detail->subject;
                $this->date[$key] = $detail->date;
                $this->time[$key] = $detail->time;
            }
        }
    }

     
    protected array $rules = [
        'job_title' => 'nullable',
        // 'department_name' => 'nullable',
        'department_setup_id' => 'nullable',
        'logs' => 'nullable',

        'to.*' => 'nullable',
        'subject.*' => 'nullable',
        'date.*' => 'nullable',
        'time.*' => 'nullable',
    ];


    public function submit()
    {
        $this->service->store($this->validate());
        $this->dispatchBrowserEvent('notify');
        $this->dispatchBrowserEvent('reload');

       $mail = Mail::to('noushinnaina2626@gmail.com')->send(new NotifyMail());

        if (Mail::flushMacros()) {
           return response()->Fail('Sorry! Please try again latter');
        }
        else{
           return response()->json('Great! Successfully send in your mail');
        }
    }

    // public function send(){
    //     if($this->isOnline()){
    //         return "ok";
    //     }
    //     else{
    //         return "not";
    //     }
    // }

    public function isOnline($site="https://www.youtube.com/"){
        if(@fopen($site,"r")){
            return "true";
        }
        else{
            return "false";
        }

    }
   
    public function updated($name, $value)
    {
        if (str_starts_with($name, 'job_title')) {

            $this->department_setup_id = $this->employeeRequisitionRepo->getDepartmentName($value)->department->department_name;
        }
    }

    public function render()
    {
        $data = [
            'job' => $this->employeeRequisitionRepo->getData(),
        ];
        return view('livewire.send-mail-create', $data);
    }
}