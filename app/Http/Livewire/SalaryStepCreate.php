<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Traits\CommonAddMore;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\SalaryStepRepository;
use App\Services\SalaryStepService;
use Livewire\Component;
use Livewire\WithPagination;

class SalaryStepCreate extends Component
{
    use WithPagination, CommonListElements, CommonAddMore;
    private SalaryStepService $service;
    private SalaryStepRepository $repo;

    protected array $addMoreItems = ['step_name'];

    public function boot(
        SalaryStepService $service,
        SalaryStepRepository $repo
        ){
        $this->inputs[] = $this->numberOfItems;
        $this->service = $service;
        $this->repo = $repo;

        $targetKey = count($this->inputs)-1;
        foreach($this->addMoreItems as $each){
            $this->{$each}[$targetKey] = null;
        }
    }

    public $step_name;
    public $record;

    protected array $rules =  [
        'step_name.*' => 'required',
    ];

    public function submit()
    {
        $this->service->store($this->validate());
        $this->dispatchBrowserEvent('notify');
        $this->dispatchBrowserEvent('reload');
    }

    public function mount()
    {
        if ($this->record) {
            $this->inputs = [0];

            $this->step_name[0] = $this->record->step_name;
        }
    }

    public function update()
    {
        $this->service->update($this->record, $this->validate());
        $this->dispatchBrowserEvent('notify');
        $this->redirectRoute('salary-step.create');
    }
    
    public function render()
    {
        return view('livewire.salary-step-create');
    }
}
