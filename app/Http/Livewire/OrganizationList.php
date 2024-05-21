<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\OrganizationRepository;
use App\Http\Livewire\Traits\CommonListElements;

class OrganizationList extends Component
{   use WithPagination, CommonListElements;
    protected string $destroyRoute = 'organization.destroy';
    private OrganizationRepository $organizationRepo;
    public $reportList;

    public function boot(OrganizationRepository $organizationRepo)
    {
        $this->organizationRepo = $organizationRepo;
    }
    public function toggleApprove($recordId)
    {
        $this->organizationRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }

    public function render()
    {
        $data = [
            'records' => $this->organizationRepo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.organization-list' ,$data);
    }
}
