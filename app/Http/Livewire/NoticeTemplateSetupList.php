<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\NoticeTemplateSetupRepository;

class NoticeTemplateSetupList extends Component
{
    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'notice-template-setup.destroy';
    private NoticeTemplateSetupRepository $noticeTemplateSetupRepo;
    public $reportList;

    public function boot(NoticeTemplateSetupRepository $noticeTemplateSetupRepo)
    {
        $this->noticeTemplateSetupRepo = $noticeTemplateSetupRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->noticeTemplateSetupRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }
    public function render()
    {
        $data = [
            'records' => $this->noticeTemplateSetupRepo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.notice-template-setup-list',$data);
    }
}
