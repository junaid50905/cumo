<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\AttendenceRepository;
use App\Http\Livewire\Traits\CommonListElements;

class AttendenceCardList extends Component
{
    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'attendence-card.destroy';
    private AttendenceRepository $attendenceRepo;
    
    
    public function boot(AttendenceRepository $attendenceRepo)
    {
        $this->attendenceRepo = $attendenceRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->attendenceRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }
    
    public function render()
    {
        $data = [
            'records' => $this->attendenceRepo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.attendence-card-list', $data);
    }
}
