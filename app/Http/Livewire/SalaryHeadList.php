<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\SalaryHeadRepository;

class SalaryHeadList extends Component
{
    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'salary-head.destroy';
    private SalaryHeadRepository $repo;
    public function boot(SalaryHeadRepository $repository)
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
        return view('livewire.salary-head-list',$data);
    }
}
