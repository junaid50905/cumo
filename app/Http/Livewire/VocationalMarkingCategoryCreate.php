<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\CommonAddMore;
use App\Http\Livewire\Traits\CommonListElements;
use App\Services\VocationalMarkingCategoryService;
use App\Repositories\VocationalMarkingCategoryRepository;

class VocationalMarkingCategoryCreate extends Component
{
    use WithPagination, CommonListElements, CommonAddMore;
    private VocationalMarkingCategoryService $service;
    private VocationalMarkingCategoryRepository $repo;

    protected array $addMoreItems = ['category_name'];

    public function boot(
        VocationalMarkingCategoryService $service,
        VocationalMarkingCategoryRepository $repository,
    ) {
        $this->inputs[] = $this->numberOfItems;
        $this->service = $service;
        $this->repo = $repository;

        $targetKey = count($this->inputs) - 1;
        foreach ($this->addMoreItems as $each) {
            $this->{$each}[$targetKey] = null;
        }
    }

    public $category_name;
    public $record;

    protected array $rules =  [
        'category_name.*' => 'required',
    ];

    public function submit()
    {
        $this->service->store($this->validate());
        $this->dispatchBrowserEvent('notify');
        $this->dispatchBrowserEvent('reload');
    }


    public function mount()
    {
        if ($this->record) {

            $this->inputs = [0];

            $this->category_name[0] = $this->record->category_name;
        }
    }

    public function update()
    {
        $this->service->update($this->record, $this->validate());
        $this->dispatchBrowserEvent('notify');
        $this->redirectRoute('Vocational-Mcategory.create');
    }

    public function render()
    {
        return view('livewire.vocational-marking-category-create');
    }
}
