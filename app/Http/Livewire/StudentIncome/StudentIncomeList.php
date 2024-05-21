<?php

namespace App\Http\Livewire\StudentIncome;

use App\Http\Livewire\Traits\CommonListElements;
use App\Services\StudentIncomeService;
use App\Utility\ProjectConstants;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;

use function Psy\sh;

class StudentIncomeList extends Component
{
    use WithPagination, CommonListElements;

    public int $recordId = 0;
    private StudentIncomeService $service;
    protected string $destroyRoute = 'student-income.destroy';

    public function boot(StudentIncomeService $service)
    {
        $this->service = $service;
    }

    public function show($studentIncome = [], $mode = 'create', $recordId = 0)
    {
        $this->recordId = $recordId;
        $this->emit('show-student-income', $studentIncome, $mode, $recordId);
    }

    public function render(): Factory|View|Application
    {
        $data = [
            'records' => $this->service->getListData($this->perPage, $this->search),
        ];
        return view('livewire.student-income.student-income-list', $data);
    }
}
