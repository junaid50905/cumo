<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\UserRepository;
use App\Http\Livewire\Traits\CommonListElements;

class UserList extends Component
{
    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'user.destroy';
    private UserRepository $userRepo;
    public $reportList;

    public function boot(UserRepository $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->userRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }

    public function render()
    {
        $data = [
            'records' => $this->userRepo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.user-list',$data);
    }
}
