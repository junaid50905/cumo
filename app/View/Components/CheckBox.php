<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CheckBox extends Component
{
    public string $name;
    public string $wireModel;
    public string $label;
    public string $placeholder;
    public string $inputClass;
    public string $inputId;
    public string $required;
    public string $checked;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name = '', $wireModel = '', $label = '', $placeholder = '', $inputClass = '', $inputId = '', $required = '', $checked = '')
    {
        $this->name = $name;
        $this->wireModel = $wireModel;
        $this->label = $label ?: prepareInputLabel($name);
        $this->placeholder = $placeholder;
        $this->inputClass = $inputClass;
        $this->inputId = $inputId ?: mt_rand(100, 99999999);
        $this->required = $required ? 'required' : '';
        $this->checked = $checked ? 'checked' : '';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.check-box');
    }
}