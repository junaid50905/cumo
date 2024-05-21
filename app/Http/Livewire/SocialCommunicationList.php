<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\SocialCommunicationRepository;

class SocialCommunicationList extends Component
{
    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'social-communication.destroy';
    private SocialCommunicationRepository $socialCommunicationRepo;
    public $reportList;

    public function boot(SocialCommunicationRepository $socialCommunicationRepo)
    {
        $this->socialCommunicationRepo = $socialCommunicationRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->socialCommunicationRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }
    public function render()
    {
        $data = [
            'records' => $this->socialCommunicationRepo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.social-communication-list',$data);
    }
}
