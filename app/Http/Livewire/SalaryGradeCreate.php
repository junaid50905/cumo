<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Services\SalaryGradeService;
use App\Http\Livewire\Traits\CommonAddMore;
use App\Repositories\SalaryGradeRepository;
use App\Http\Livewire\Traits\CommonListElements;

class SalaryGradeCreate extends Component
{
    use WithPagination, CommonListElements, CommonAddMore;
    private SalaryGradeService  $service;
    private SalaryGradeRepository $repo;

    protected array $addMoreItems = ['grade_name'];

    public function boot(
        SalaryGradeService $service,
        SalaryGradeRepository $repository,
    ) {
        $this->inputs[] = $this->numberOfItems;
        $this->service = $service;
        $this->repo = $repository;

        $targetKey = count($this->inputs) - 1;
        foreach ($this->addMoreItems as $each) {
            $this->{$each}[$targetKey] = null;
        }
    }

    public $grade_name;
    public $record;

    protected array $rules =  [
        'grade_name.*' => 'required',
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

            $this->grade_name[0] = $this->record->grade_name;
        }
    }

    public function update()
    {
        $this->service->update($this->record, $this->validate());
        $this->dispatchBrowserEvent('notify');
        $this->redirectRoute('salary-grade.create');
    }

    public function render()
    {
        return view('livewire.salary-grade-create');
    }
}
