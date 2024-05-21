<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\CommonListElements;

class LeavePackageList extends Component
{
    use WithPagination, CommonListElements;
    private FinishedGoodRepository $repo;
    
    public function render()
    {
        return view('livewire.leave-package-list');
    }
}
