<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\SectionRepository;
use App\Http\Livewire\Traits\CommonListElements;

class SectionList extends Component
{
    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'section.destroy';
    private SectionRepository $sectionRepo;
    public $reportList;

    public function boot(SectionRepository $sectionRepo)
    {
        $this->sectionRepo = $sectionRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->sectionRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }
    public function render()
    {
        $data = [
            'records' => $this->sectionRepo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.section-list',$data);
    }
}
