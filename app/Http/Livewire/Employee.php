<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Services\EmployeeService;
use App\Repositories\EmployeeRepository;
use Illuminate\Support\Facades\Session;
use App\Http\Livewire\Traits\CommonListElements;

class Employee extends Component
{
    use WithPagination, CommonListElements;
    private EmployeeService $service;
    private EmployeeRepository $repo;

    public function boot(
        EmployeeService $service,
        EmployeeRepository $repository
    ) {
        $this->service = $service;
        $this->repo = $repository;
    }

    public $employee;
    public $name;
   
    protected array $rules =  [
        'name' => 'nullable'
    ];

    public function submit()
    {
        $this->service->store($this->validate());
        $this->dispatchBrowserEvent('notify');
        $this->dispatchBrowserEvent('reload');
    }


    public function mount()
    {
        if ($this->employee) {
            $this->employee = $this->repo->getRelatedData($this->employee, ['details']);
            $this->name = $this->employee->name;
        }
    }

    public function update()
    {
        $this->service->update($this->course, $this->validate());
        $this->dispatchBrowserEvent('notify');
        //$this->redirectRoute('course.create');
    }
    
    public function render()
    {
        return view('livewire.employee');
    }
}
