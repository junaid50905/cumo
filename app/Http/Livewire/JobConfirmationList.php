<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\JobConfirmationRepository;
use Livewire\Component;
use Livewire\WithPagination;

class JobConfirmationList extends Component
{
    use WithPagination,CommonListElements;

    protected string $destroyRoute = 'job-confirmation.destroy';
    private JobConfirmationRepository $jobRepo;

    public function boot(JobConfirmationRepository $jobRepo)
    {
        $this->jobRepo = $jobRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->jobRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }
    public function render()
    {
        $data = [
            'records' => $this->jobRepo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.job-confirmation-list',$data);
    }
}
