<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\SendMailRepository;
use Livewire\Component;
use Livewire\WithPagination;

class SendMailList extends Component
{

    use WithPagination,CommonListElements;
    private SendMailRepository $sendMailRepo;

    protected string $destroyRoute = 'send-mail.destroy';

    public function boot(SendMailRepository $sendMailRepo){
        $this->sendMailRepo = $sendMailRepo;;
    }

    public function toggleApprove($recordId)
    {
        $this->jobContactRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }

    public function render()
    {
        $data = [
            'records' => $this->sendMailRepo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.send-mail-list',$data);
    }
}
