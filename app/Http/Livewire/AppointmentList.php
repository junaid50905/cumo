<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;
use App\Services\AppointmentService;
use App\Http\Livewire\Traits\CommonListElements;

class AppointmentList extends Component
{
    use WithPagination, CommonListElements;

    public int $recordId = 0;

    private AppointmentService $service;

    protected $listeners = ['reset-appointment-list' => 'resetPageToInitial', 'rerender-appointment-list' => 'reRenderList'];

    public function boot(AppointmentService $service)
    {
        $this->service = $service;
    }

    public function resetPageToInitial()
    {
        $this->resetPage();
    }

    public function reRenderList()
    {
        $this->render();
    }

    public function show($student = [], $mode = 'create', $recordId = 0)
    {

        $this->recordId = $recordId;
        $this->emit('show-appointment', $student, $mode, $recordId);
    }

    public function delete($id)
    {
        $student =  Student::find($id);
        $student->delete();
        $this->dispatchBrowserEvent('notify');
    }

    public function render()
    {
        $data = [
            'records' => $this->service->getListData($this->perPage, $this->search)
        ];

        return view('livewire.appointment-list', $data)->extends('layouts.master')->section('content');
    }
}
