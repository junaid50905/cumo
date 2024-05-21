<?php

namespace App\Http\Livewire;
use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\CustomerTypeRepository;
use App\Http\Livewire\Traits\CommonListElements;

class CustomerTypeList extends Component

{
    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'customer-type.destroy';
    private CustomerTypeRepository $customerTypeRepo;
    public $reportList;

    public function boot(CustomerTypeRepository $customerTypeRepo)
    {
        $this->customerTypeRepo = $customerTypeRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->customerTypeRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }
    public function render()
    {
        $data = [
            'records' => $this->customerTypeRepo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.customer-type-list',$data);
    }
}
