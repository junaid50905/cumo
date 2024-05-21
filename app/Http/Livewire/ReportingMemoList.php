<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\ReportingMemoRepository;
use Livewire\Component;
use Livewire\WithPagination;

class ReportingMemoList extends Component
{
    use WithPagination,CommonListElements;
    private ReportingMemoRepository $repotingMemoRepo;

    protected string $destroyRoute = 'reporting-memo.destroy';

    public function boot(ReportingMemoRepository $repotingMemoRepo){
        $this->repotingMemoRepo = $repotingMemoRepo;;
    }
    
    public function toggleApprove($recordId)
    {
        $this->repotingMemoRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }

    public function render()
    {
        $data = [
            'records' => $this->repotingMemoRepo->getListData($this->perPage, $this->search)
        ];
        return view('livewire.reporting-memo-list',$data);
    }
}
