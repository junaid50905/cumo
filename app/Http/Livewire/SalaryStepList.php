<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\SalaryStepRepository;
use Livewire\Component;
use Livewire\WithPagination;

class SalaryStepList extends Component
{
    use WithPagination,CommonListElements;
    protected string $destroyRoute = 'salary-step.destroy';
    private SalaryStepRepository $repo;

    public function boot(SalaryStepRepository $repo)
    {
        $this->repo = $repo;
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
        return view('livewire.salary-step-list', $data);
    }
}
