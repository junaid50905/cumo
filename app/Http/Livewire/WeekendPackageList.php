<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\WeekendPackageRepository;

class WeekendPackageList extends Component
{
    use WithPagination, CommonListElements;

    private WeekendPackageRepository $repo;
    protected string $destroyRoute = 'weekend-package.destroy';

    public function boot(WeekendPackageRepository $repo)
    {
        $this->repo = $repo;
    }

    public function toggleApprove($recordId)
    {
        $this->caseRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }

    public function render()
    {
        $data = [
            'records' => $this->repo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.weekend-package-list',$data);
    }
}
