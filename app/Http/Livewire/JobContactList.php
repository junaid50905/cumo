<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\JobContactRepository;
use Livewire\Component;
use Livewire\WithPagination;

class JobContactList extends Component
{
    use WithPagination,CommonListElements;
    private JobContactRepository $jobContactRepo;

    protected string $destroyRoute = 'job-contact.destroy';

    public function boot(JobContactRepository $jobContactRepo){
        $this->jobContactRepo = $jobContactRepo;;
    }

    public function toggleApprove($recordId)
    {
        $this->jobContactRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }

    public function render()
    {
        $data = [
            'records' => $this->jobContactRepo->getListData($this->perPage, $this->search)
        ];
        return view('livewire.job-contact-list',$data);
    }
}
