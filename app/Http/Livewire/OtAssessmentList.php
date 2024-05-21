<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\OtAssessmentRepository;
use App\Http\Livewire\Traits\CommonListElements;

class OtAssessmentList extends Component
{
    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'ot-assessment.destroy';
    private OtAssessmentRepository $otAssessmentRepo;
    public $reportList;

    public function boot(OtAssessmentRepository $otAssessmentRepo)
    {
        $this->otAssessmentRepo = $otAssessmentRepo;
    }
    public function delete($id)
    {
        $this->otAssessmentRepo->delete($id);
        $this->dispatchBrowserEvent('notify', 'Deleted');
    }

    public function toggleApprove($recordId)
    {
        $this->otAssessmentRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }

    public function render()
    {
         $data = [
            'records' => $this->otAssessmentRepo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.ot-assessment-list',$data);
    }
}
