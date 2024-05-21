<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\ProjectSetupRepository;
use App\Http\Livewire\Traits\CommonListElements;

class ProjectSetupList extends Component
{
    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'project.destroy';
    private ProjectSetupRepository $projectSetupRepo;
    public $reportList;

    public function boot(ProjectSetupRepository $projectSetupRepo)
    {
        $this->projectSetupRepo = $projectSetupRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->projectSetupRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }
  
    public function render()
    {
        $data = [
            'records' => $this->projectSetupRepo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.project-setup-list',$data);
    }
}
