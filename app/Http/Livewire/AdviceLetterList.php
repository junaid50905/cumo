<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\AdviceLetterRepository;
use Livewire\Component;
use Livewire\WithPagination;

class AdviceLetterList extends Component
{
    use WithPagination,CommonListElements;
    protected string $destroyRoute = 'advice-letter.destroy';
    private AdviceLetterRepository $adviceRepo;

    public function boot(AdviceLetterRepository $adviceRepo)
    {
        $this->adviceRepo = $adviceRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->adviceRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }

    public function render()
    {
        $data = [
            'records' => $this->adviceRepo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.advice-letter-list',$data);
    }
}
