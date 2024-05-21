<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\ExecutiveFunctionRepository;

class ExecutionFunctionList extends Component
{

    use WithPagination, CommonListElements;
    private ExecutiveFunctionRepository $executiveRepo;
    protected string $destroyRoute = 'executive-function.destroy';
    public function boot(ExecutiveFunctionRepository $executiveRepo)
    {
        $this->executiveRepo = $executiveRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->executiveRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }

    public function delete($id)
    {
        $this->executiveRepo->delete($id);
        $this->dispatchBrowserEvent('notify', 'Deleted');
    }

    public function render()
    {
        $data = [
            'records' => $this->executiveRepo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.execution-function-list', $data);
    }
}
