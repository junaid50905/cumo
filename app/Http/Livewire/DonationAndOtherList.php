<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\DonationRepository;
use App\Services\DonationService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class DonationAndOtherList extends Component
{
    use WithPagination, CommonListElements;

    protected string $destroyRoute = 'donation-and-other.destroy';

    private DonationService $service;
    private DonationRepository $repo;

    public function boot(DonationService $service, DonationRepository $repository)
    {
        $this->service = $service;
        $this->repo = $repository;
    }

    public function render(): Factory|View|Application
    {
        $data = [
            'records' => $this->repo->getListData($this->perPage, $this->search),
        ];

        return view('livewire.donation-and-other-list', $data);
    }
}
