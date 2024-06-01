<?php

namespace App\View\Components;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputRadioOrCheck extends Component
{
    public bool $multiple;
    public string $name;
    public string $type;
    public string $label;
    public string $isVertical;
    public string $secondaryInputLabel;
    public $records;
    public string $secondaryInputName;
    public array $checked;
    public $secondaryInputValue;
    public string $selectedValue;
    public string $wireModel;
    public string $secondaryInputWireModel;

    public function __construct(
        $records,
        $label = '',
        $name = '',
        $checked = false,
        $isVertical = true,
        $multiple = false,
        $secondaryInputLabel = '',
        $secondaryInputValue = '',
        $type = 'radio',
        $selectedValue = '', 
        $wireModel = false,
        $secondaryInputWireModel = false
    )
    {
        $name                      = $wireModel ?: ($name ?: convertLevelIntoName($label));
        $this->multiple            = $multiple;
        $this->name                = $multiple ? $name . '[]' : $name;
        $this->type                = $multiple ? 'checkbox' : $type;
        $this->label               = $label;
        $this->records             = $records;
        $this->isVertical          = $isVertical ? 'd-flex' : '';
        $this->secondaryInputLabel = $secondaryInputLabel;
        $this->secondaryInputName  = $secondaryInputLabel ? "{$name}_secondary" : '';
        $this->checked             = $checked ? (is_array($checked) ? $checked : [$checked]) : [];
        $this->secondaryInputValue = $secondaryInputValue;
        $this->selectedValue       = $selectedValue ?? '';
        $this->wireModel           = $wireModel ? $wireModel : '';
        $this->secondaryInputWireModel = $secondaryInputWireModel ? $secondaryInputWireModel : '';
    }

    public function render(): View|Factory|Application
    {
        return view('components.input-radio-or-check');
    }
}
