<?php

namespace App\Http\Livewire;

use Livewire\Component;
// use Livewire\WithPagination;
use App\Services\TaskService;
use App\Repositories\TaskRepository;
use App\Http\Livewire\Traits\CommonAddMore;
//use App\Http\Livewire\Traits\CommonListElements;

class TaskCreate extends Component
{

    //use WithPagination, CommonListElements, CommonAddMore;
    use CommonAddMore;
    //private string $destroyRoute = 'finished-goods.destroy';
    private TaskService $service;
    private TaskRepository $repo;
    //protected array $addMoreItems = ['task_name', 'type'];
    protected array $addMoreItems = ['task_name', 'type'];
    
    public $task;
    public $activity_id;
    
    public $task_name;
    public $type;

    public function boot(
        TaskService $service,
        TaskRepository $repository,
    ) {
        $this->service = $service;
        $this->repo = $repository;
        $this->inputs[] = $this->numberOfItems;
        $targetKey = count($this->inputs) - 1;
        foreach ($this->addMoreItems as $each) {
            $this->{$each}[$targetKey] = null;
        }
    }

    protected array $rules = [
        'activity_id' => 'required',
        'task_name.*' => 'required',
        'type.*' => 'required'
    ];

    public function submit()
    {  
        $this->service->store($this->validate());
        $this->dispatchBrowserEvent('notify');
        $this->dispatchBrowserEvent('reload');
    }
    
    // public function mount()
    // {  
    //     if ($this->task) {
    //         $this->activity_id = $this->task->activity_id;
    //     }
    // }

    public function render()
    {   
        $activities = \App\Models\Activity::get(); //dd($activities);
        return view('livewire.task-create', compact('activities'));
    }
}
