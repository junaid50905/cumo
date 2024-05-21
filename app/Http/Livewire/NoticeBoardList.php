<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\NoticeBoardRepository;
use App\Http\Livewire\Traits\CommonListElements;

class NoticeBoardList extends Component
{

    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'notice-board.destroy';

    private NoticeBoardRepository $noticeBoardRepo;

    public function boot(NoticeBoardRepository $noticeBoardRepo)
    {
        $this->noticeBoardRepo = $noticeBoardRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->noticeBoardRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }

    public function delete($id)
    {
        $this->noticeBoardRepo->delete($id);
        $this->dispatchBrowserEvent('notify', 'Deleted');
    }

    public function render()
    {
        $data = [
            'records' => $this->noticeBoardRepo->getListData($this->perPage, $this->search)
        ];
        return view('livewire.notice-board-list', $data)->extends('layouts.master')->section('content');
    }
}
