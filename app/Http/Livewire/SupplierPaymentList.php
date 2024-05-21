<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Session;
use App\Services\SupplierPaymentService;
use App\Repositories\SupplierPaymentRepository;
use App\Http\Livewire\Traits\CommonListElements;

class SupplierPaymentList extends Component
{

    use WithPagination, CommonListElements;

    protected string $destroyRoute = 'supplier-payment.destroy';

    private SupplierPaymentService $service;
    private SupplierPaymentRepository $repo;

    public function boot(SupplierPaymentService $service, SupplierPaymentRepository $repository)
    {
        $this->service = $service;
        $this->repo = $repository;
    }


    public function toggleApprove($recordId)
    {
        $this->repo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }

    public function render()
    {
        $data = [
            'records' => $this->repo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.supplier-payment-list', $data);
    }
}
