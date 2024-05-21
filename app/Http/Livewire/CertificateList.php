<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\CertificateRepository;
use App\Http\Livewire\Traits\CommonListElements;

class CertificateList extends Component
{
    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'certificate.destroy';
    private CertificateRepository $certificateRepo;
    public $reportList;

    public function boot(CertificateRepository $certificateRepo)
    {
        $this->certificateRepo = $certificateRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->certificateRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }
    public function render()
    {
        $data = [
            'records' => $this->certificateRepo->getListData($this->perPage, $this->search),
      ];
        return view('livewire.certificate-list' ,$data);
    }
}
