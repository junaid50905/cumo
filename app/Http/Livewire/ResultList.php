<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\ResultRepository;
use App\Http\Livewire\Traits\CommonListElements;

class ResultList extends Component
{
    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'result.destroy';
    private ResultRepository $resultRepo;
    
    public function boot(ResultRepository $resultRepo)
    {
        $this->resultRepo = $resultRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->resultRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }


    public function render()
    {
        $data = [
            'records' => $this->resultRepo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.result-list', $data);
    }
}
