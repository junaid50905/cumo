<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\BonusPackageRepository;

class BonusPackageList extends Component
{
    use WithPagination, CommonListElements;
    private BonusPackageRepository $repo;

    protected string $destroyRoute = 'bonus-package.destroy';

    public function boot(BonusPackageRepository $repository)
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
        return view('livewire.bonus-package-list',$data);
    }
}
