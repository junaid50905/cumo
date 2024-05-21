<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\MeasureUnitRepository;

class MeasureUnitList extends Component
{
    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'unit.destroy';
    private MeasureUnitRepository $measureUnitRepo;
    public $reportList;

    public function boot(MeasureUnitRepository $measureUnitRepo)
    {
        $this->measureUnitRepo = $measureUnitRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->measureUnitRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }
  
    public function render()
    {
        $data = [
            'records' => $this->measureUnitRepo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.measure-unit-list',$data);
    }
}
