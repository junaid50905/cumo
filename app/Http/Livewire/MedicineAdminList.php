<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\MedicineAdminRepository;
use App\Http\Livewire\Traits\CommonListElements;

class MedicineAdminList extends Component
{
    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'medicine-admin.destroy';
    private MedicineAdminRepository $repo;

    public function boot(MedicineAdminRepository $repo)
    {
        $this->repo = $repo;
    }

    public function toggleApprove($recordId)
    {
        $this->repo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }

    public function delete($id)
    {
        $this->repo->delete($id);
        $this->dispatchBrowserEvent('notify', 'Deleted');
    }

    public function render()
    {
        $data = [
            'records' => $this->repo->getListData($this->perPage, $this->search)
        ];
        return view('livewire.medicine-admin-list', $data);
    }
}
