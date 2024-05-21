<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\UserRepository;
use App\Repositories\TaskWeightRepository;
use App\Http\Livewire\Traits\CommonAddMore;
use App\Http\Livewire\Traits\CommonListElements;

class TaskWeightCreate extends Component
{

    use WithPagination, CommonListElements;

    private string $destroyRoute = 'finished-goods.destroy';
    private TaskWeightRepository $service;
    private UserRepository $userRepo;

    public $taskWeight;
    public $domain;
    public $sub_domain;
    public $area;
    public $activity;
    public $activity_type;

    public function boot(
        TaskWeightRepository $service,
        UserRepository $userRepository, 
    ) {
        // $this->inputs[] = $this->numberOfItems;
        // $this->service = $service;
        // $this->userRepo = $userRepository;

        // $targetKey = count($this->inputs) - 1;
        // foreach ($this->addMoreItems as $each) {
        //     $this->{$each}[$targetKey] = null;
        // }
    }
    
    public function mount()
    {
        if ($this->taskWeight) {
            $this->taskWeight = $this->repo->getRelatedData($this->taskWeight, ['details']);
            $this->inputs = $this->taskWeight->details->toArray();

            foreach ($this->taskWeight->details as $key => $detail) {
                $this->product_id[$key] = $detail->product_id;
                $this->qty[$key] = $detail->qty;
                $this->unit[$key] = $detail->unit;
            }
        }
    }

    protected array $rules = [
        'domain' => 'required',
        'sub_domain' => 'required',
        'area' => 'required',
        'activity' => 'nullable',
        'activity_type' => 'required',
    ];


    public function render()
    {
        return view('livewire.task-weight-create');
    }
}
