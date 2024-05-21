<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\ApplyForJobRepository;
use Livewire\Component;
use Livewire\WithPagination;
use Carbon\Carbon;     

class ApplyJobList extends Component
{
    use WithPagination,CommonListElements;
    protected string $destroyRoute = 'apply.destroy';
    private ApplyForJobRepository $applyJobRepo;

    public function boot(ApplyForJobRepository $applyJobRepo)
    {
        $this->applyJobRepo = $applyJobRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->applyJobRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }
    

    public function render()
    {      

        $data = [
            'records' => $this->applyJobRepo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.apply-job-list',$data);
    }
}
