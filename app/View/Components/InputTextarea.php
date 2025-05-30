<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputTextarea extends Component
{
    public string $name;
    public int $rows;
    public string $cols;
    public $label;
    public $placeholder;
    public $value;
    public string $required;
    public string $wireModel;

    /**
     * @throws \Exception
     */
    public function __construct($name = '', $multiple = false, $label = false, $rows = 5, $cols = 5, $placeholder = false, $value = false, $required = false, $wireModel = false)
    {
        if (!$name && !$wireModel) {
            throw new \Exception("Either name or wire model is required");
        }

        $name = $wireModel ?: $name;
        $this->name = $multiple ? $name . '[]' : $name;

        // Option 1: Use prepareInputLabel function
        // $this->label = $label ?: prepareInputLabel($name);

        // Option 2: Remove the function call
        $this->label = $label ?: $name; // Change this if you need a different default behavior

        $this->rows = $rows;
        $this->cols = $cols;
        $this->placeholder = $placeholder ?? $label;
        $this->value = old($name, $value);
        $this->required = $required ? 'required' : '';
        $this->wireModel = $wireModel ? "wire:model=$wireModel" : '';
    }

    public function render()
    {
        return view('components.input-textarea');
    }
}
