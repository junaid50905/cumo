<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\AssignTeacherRepository;
use App\Http\Livewire\Traits\CommonListElements;

class AssignTeacherList extends Component
{
    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'assign-teacher.destroy';
    private AssignTeacherRepository $assignTheacherRepo;

    public function boot(AssignTeacherRepository $assignTheacherRepo)
    {
        $this->assignTheacherRepo = $assignTheacherRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->assignTheacherRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }

    public function delete($id)
    {
        $this->assignTheacherRepo->delete($id);
        $this->dispatchBrowserEvent('notify', 'Deleted');
    }
    public function render()
    {
        $data = [
            'records' => $this->assignTheacherRepo->getListData($this->perPage, $this->search)
        ];
        return view('livewire.assign-teacher-list', $data);
    }
}
