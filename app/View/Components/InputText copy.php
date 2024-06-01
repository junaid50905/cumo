<?php

namespace App\View\Components;

use Exception;
use Illuminate\View\Component;

class InputText extends Component
{
    public string $name;
    //    public string $label;
    //    public string $labelFor;
    public string $readOnly;
    public $placeholder;
    public $value;
    public $min;
    //    public $inputId;
    //    public $inputClass;
    public string $required;
    public string $type;
    public string $wireModel;
    /**
     * @throws Exception
     */
    public function __construct($name = '', $readOnly = false, $type = 'text', $placeholder = '', $value = false, $min = false, $required = false, $multiple = false, $wireModel = '')
    {
        if (!$wireModel && !$name) {
            throw new Exception("Need a name or wireModel");
        }

        $name = $wireModel ?: $name;
        $this->name = $name . ($multiple ? '[]' : '');
        //        $this->label = $label ?: prepareInputLabel($name);
        //        $this->labelFor = $inputId ?: $this->label;
        $this->readOnly = $readOnly ? 'readonly' : '';
        $this->placeholder = $placeholder;
        $this->value = old($name, $value);
        $this->min = $min ?? '0';
        //        $this->inputId = $this->labelFor;
        //        $this->inputClass = $inputClass;
        $this->required = $required ? 'required' : '';
        $this->type = $type;
        $this->wireModel = $wireModel ? "wire:model=$wireModel" : '';
    }

    public function render()
    {
        return view('components.input-text');
    }
}
