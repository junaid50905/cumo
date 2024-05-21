<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\GymAndOutingRepository;

class GymAndOutingList extends Component
{
    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'gym-and-outing.destroy';
    private GymAndOutingRepository $gymAndOutRepo;
    public $reportList;

    public function boot(GymAndOutingRepository $gymAndOutRepo)
    {
        $this->gymAndOutRepo = $gymAndOutRepo;
    }

    public function delete($id)
    {
        $this->gymAndOutRepo->delete($id);
        $this->dispatchBrowserEvent('notify', 'Deleted');
    }

    public function toggleApprove($recordId)
    {
        $this->gymAndOutRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }
    
    public function render()
    {
        $data = [
            'records' => $this->gymAndOutRepo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.gym-and-outing-list', $data);
    }
}
