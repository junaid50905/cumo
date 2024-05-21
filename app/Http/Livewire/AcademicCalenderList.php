<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\AcademicCalenderRepository;

class AcademicCalenderList extends Component
{
    use WithPagination, CommonListElements;

    private AcademicCalenderRepository $academicCalenderRepo;
    protected string $destroyRoute = 'academic-calender.destroy';

    public function boot(AcademicCalenderRepository $academicCalenderRepo)
    {
        $this->academicCalenderRepo = $academicCalenderRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->caseRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }

    public function render()
    {
        $data = [
            'records' => $this->academicCalenderRepo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.academic-calender-list',$data);
    }
}
