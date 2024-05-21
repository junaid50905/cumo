<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\DoctorRepository;
use App\Http\Livewire\Traits\CommonListElements;

class DoctorList extends Component
{
    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'doctor.destroy';
    private DoctorRepository $doctorRepo;
    public $reportList;

    public function boot(DoctorRepository $doctorRepo)
    {
        $this->doctorRepo = $doctorRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->doctorRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }
    public function render()
    {
        $data = [
            'records' => $this->doctorRepo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.doctor-list',$data);
    }
}
