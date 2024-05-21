<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\CategoryRepository;
use App\Repositories\VocationalEvalutionRepository;

class VocationalEvalutionList extends Component
{
    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'vocational-evaluation.destroy';
    private VocationalEvalutionRepository $vocRepo;

    public function boot(VocationalEvalutionRepository $vocRepo)
    {
        $this->vocRepo = $vocRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->vocRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }

    public function delete($id)
    {
        $this->vocRepo->delete($id);
        $this->dispatchBrowserEvent('notify', 'Deleted');
    }

    public function render()
    {
        $data = [
            'records' => $this->vocRepo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.vocational-evalution-list', $data)->extends('layouts.master')->section('content');
    }
}
