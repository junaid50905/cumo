<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\salaryGradeRepository;

class SalaryGradeList extends Component
{
    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'salary-grade.destroy';
    private salaryGradeRepository $repo;
    
    public function boot(salaryGradeRepository $repository)
    {
        $this->repo = $repository;
    }

    public function toggleApprove($recordId)
    {
        $this->repo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }

    public function render()
    {
        $data = [
            'records' => $this->repo->getListData($this->perPage, $this->search)
        ];
        return view('livewire.salary-grade-list', $data);
    }
}
