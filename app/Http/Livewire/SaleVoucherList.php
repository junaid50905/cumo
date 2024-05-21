<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\IncomeRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class SaleVoucherList extends Component
{
    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'sale-voucher.destroy';

    private IncomeRepository $repo;

    public function boot(IncomeRepository $repository)
    {
        $this->repo = $repository;
    }

    public function render(): Factory|View|Application
    {
        $data = [
            'records' => $this->repo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.sale-voucher-list', $data);
    }
}
