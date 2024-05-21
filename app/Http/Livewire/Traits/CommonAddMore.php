<?php

namespace App\Http\Livewire\Traits;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;

trait CommonAddMore
{
    public $mode;
    public $project_id;
    public $warehouse_id;
    public $product_id;
    public $available_qty;
    public $qty;
    public $sub_total;
    public $note;
    public $price;
    public $discount;
    public $date;
    public array $inputs = [];
    public int $numberOfItems = 1;
    public $error;

    public function addMore(): void
    {
        $this->numberOfItems += 1;
        $this->inputs[]      = $this->numberOfItems;

        $targetKey = count($this->inputs) - 1;
        foreach ($this->addMoreItems as $each) { 
            $this->{$each}[$targetKey] = null;
        }
    }

    public function removeItem($key)
    {  
        unset($this->inputs[$key]);
        $filtered = Arr::except($this->inputs, $key);
        [$keys, $values] = Arr::divide($filtered);
        $this->inputs = $values;

        foreach ($this->addMoreItems as $item) {
            unset($this->{$item}[$key]);
            $filtered = Arr::except($this->$item, $key);
            [$keys, $values] = Arr::divide($filtered);
            $this->{$item} = $values;
        }
    }


    public function submit()
    {
        $this->service->store($this->validate());
        $this->dispatchBrowserEvent('notify');
        $this->dispatchBrowserEvent('reload');
    }

    public function update()
    {
        $this->service->update($this->requisition, $this->validate());
        Session::flash('success');
        $this->redirect('requisition');
    }

    private function getTargetKey($name): bool|string
    {
        $extractedRecordName = explode('.', $name);

        return end($extractedRecordName);
    }
}
