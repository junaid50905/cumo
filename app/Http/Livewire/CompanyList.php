<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\CompanyRepository;
use App\Http\Livewire\Traits\CommonListElements;

class CompanyList extends Component
{   
    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'company.destroy';
    private CompanyRepository $companyRepo;
    public $reportList;

    public function boot(CompanyRepository $companyRepo)
    {
        $this->companyRepo = $companyRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->companyRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }
    
    public function render()
    {   $data = [
              'records' => $this->companyRepo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.company-list',$data);
    }
}
