<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\AppointmentRepository;

class Appointment extends Component
{

    // use WithPagination, CommonListElements;

    // private string $destroyRoute = '.destroy';

    // private AppointmentRepository $repo;

    // public function boot(AppointmentRepository $repository)
    // {
    //     $this->repo = $repository;
    // }

    // public function toggleApprove($recordId)
    // {
    //     $this->repo->toggleColumn($recordId, 'is_approved');
    //     $this->dispatchBrowserEvent('notify');
    //     $this->dispatchBrowserEvent('reload');
    // }

    public function render()
    {
        $data = [
            'records' => $this->repo->getListData($this->perPage, $this->search)
        ];

        return view('livewire.appointment');
    }
}
