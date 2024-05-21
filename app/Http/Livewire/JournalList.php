<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\JournalRepository;
use App\Services\JournalService;
use App\Utility\ProjectConstants;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class JournalList extends Component
{
    use WithPagination, CommonListElements;

    private JournalService $service;
    private JournalRepository $repo;
    public string $filter = '';
    protected string $destroyRoute = 'journal.destroy';

    public array $viewRecord = [];

    public function boot(JournalService $service, JournalRepository $repository)
    {
        $this->service = $service;
        $this->repo = $repository;
    }

    public function view($record)
    {
        $this->viewRecord = $record;
    }

    public function toggleApprove($recordId)
    {
        $this->repo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }

    public function render(): Factory|View|Application
    {
        $data = [
            'records' => $this->repo->getListData($this->perPage, $this->search, $this->filter),
        ];

        return view('livewire.journal-list', $data);
    }
}
