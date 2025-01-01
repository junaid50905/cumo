<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CheckboxSelect extends Component
{
    public $name;
    public $records;
    public $label;
    public $required;
    public $firstLabel;
    public $selectedItems;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $records, $label, $selectedItems = '', $firstLabel = 'Select an option', $required = false)
    {
        $this->name = $name;
        $this->records = $records;
        $this->label = $label;
        $this->firstLabel = $firstLabel;
        $this->required = $required;
        $this->selectedItems = $selectedItems;
        // dd($this->selectedItems);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.checkbox-select');
    }
}
