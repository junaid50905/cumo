<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Contracts\View\View;
use App\Services\RequisitionService;
use Illuminate\Contracts\View\Factory;
use App\Repositories\RequisitionRepository;
use App\Http\Livewire\Traits\CommonListElements;
use Illuminate\Contracts\Foundation\Application;

class RequisitionList extends Component
{
    use WithPagination, CommonListElements;


    private RequisitionRepository $repo;
    private RequisitionService $service;
    protected string $destroyRoute = 'requisition.destroy';


    public function boot(RequisitionService $service, RequisitionRepository $repo)
    {
        $this->service = $service;
        $this->repo = $repo;
    }

    public function toggleApprove($recordId)
    {
        $this->repo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }

    public function render(): Factory|View|Application
    {
        $data = [
            'records' => $this->service->getListData($this->perPage, $this->search)
        ];

        return view('livewire.requisition-list', $data);
    }
}
