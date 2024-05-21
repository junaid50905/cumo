<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\StudentRepository;
use App\Http\Livewire\Traits\CommonListElements;
class StudentList extends Component
{
    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'appointment.destroy';
    private StudentRepository $repo;

    public function boot(StudentRepository $repo)
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
        return view('livewire.student-list',$data);
    }
}
