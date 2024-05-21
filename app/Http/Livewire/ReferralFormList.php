<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\ReferralRepository;
use App\Http\Livewire\Traits\CommonListElements;

class ReferralFormList extends Component
{
    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'referral.destroy';

    private ReferralRepository $referralRepo;

    public function boot(ReferralRepository $referralRepo)
    {
        $this->referralRepo = $referralRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->referralRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }

    public function delete($id)
    {
        $this->referralRepo->delete($id);
        $this->dispatchBrowserEvent('notify', 'Deleted');
    }

    public function render()
    {
        $data = [
            'records' => $this->referralRepo->getListData($this->perPage, $this->search),
        ];

        return view('livewire.referral-form-list', $data)->extends('layouts.master')->section('content');
    }
}
