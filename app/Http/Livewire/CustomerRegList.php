<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\CustomerRegRepository;
use App\Http\Livewire\Traits\CommonListElements;

class CustomerRegList extends Component

{
    use WithPagination, CommonListElements;

    private CustomerRegRepository $customerRegRepo;
    public $reportList;
    protected string $destroyRoute = 'customer-reg-list.destroy';

    public function boot(CustomerRegRepository $customerRegRepo)
    {
        $this->customerRegRepo = $customerRegRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->customerRegRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }
    public function render()
    {
        $data = [
            'records' => $this->customerRegRepo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.customer-reg-list' ,$data);
    }
}
