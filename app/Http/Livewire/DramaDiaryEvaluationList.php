<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\DramaDiaryEvaluationRepository;

class DramaDiaryEvaluationList extends Component
{
     use WithPagination, CommonListElements;
    protected string $destroyRoute = 'drama-diary-evaluation.destroy';
    private DramaDiaryEvaluationRepository $dramaDriaryEvaluationRepo;
    public $reportList;

    public function boot(DramaDiaryEvaluationRepository $dramaDriaryEvaluationRepo)
    {
        $this->dramaDriaryEvaluationRepo = $dramaDriaryEvaluationRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->dramaDriaryEvaluationRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }
    public function render()
    {
        $data = [
            'records' => $this->dramaDriaryEvaluationRepo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.drama-diary-evaluation-list',$data);
    }
}
