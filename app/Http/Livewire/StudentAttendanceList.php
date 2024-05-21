<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\StudentAttendanceRepository;

class StudentAttendanceList extends Component
{
    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'notice-board.destroy';
    private StudentAttendanceRepository $studentAttendanceRepo;

    public function boot(StudentAttendanceRepository $studentAttendanceRepo)
    {
        $this->studentAttendanceRepo = $studentAttendanceRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->studentAttendanceRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }

    public function delete($id)
    {
        $this->studentAttendanceRepo->delete($id);
        $this->dispatchBrowserEvent('notify', 'Deleted');
    }
    public function render()
    {
        $data = [
            'records' => $this->studentAttendanceRepo->getListData($this->perPage, $this->search)
        ];
        return view('livewire.student-attendance-list', $data)->extends('layouts.master')->section('content');
    }
}
