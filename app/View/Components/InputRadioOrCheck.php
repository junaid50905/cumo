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
    public $records;
    public array $checked;
    public array $selectedValue;
    public string $wireModel;
    public string $secondaryInputWireModel;
    public string $secondaryInputLabel;
    public string $secondaryInputName;
    public $secondaryInputValue;
    public string $secondaryInputPlaceholder;
    public string $multipleCheckBoxName;

    public function __construct(
        $records,
        $label = '',
        $name = '',
        $checked = false,
        $isVertical = true,
        $multiple = false,
        $type = 'radio',
        $selectedValue = [],
        $wireModel = null,  // Ensure these are nullable
        $secondaryInputWireModel = null,  // Ensure these are nullable
        $secondaryInputLabel = '',
        $secondaryInputName = '',
        $secondaryInputValue = '',
        $secondaryInputPlaceholder = '',
        $multipleCheckBoxName = ''
    ) {
        $name = $wireModel ?: ($name ?: convertLevelIntoName($label));
        $this->multiple = $multiple;
        $this->name = $multiple ? $name . '[]' : $name;
        $this->type = $multiple ? 'checkbox' : $type;
        $this->label = $label;
        $this->records = $records;
        $this->isVertical = $isVertical ? 'd-flex' : '';
        $this->checked = $checked ? (is_array($checked) ? $checked : [$checked]) : [];
        $this->selectedValue = is_array($selectedValue) ? $selectedValue : explode(',', $selectedValue);
        $this->wireModel = $wireModel ?? '';  // Default to empty string if not provided
        $this->secondaryInputWireModel = $secondaryInputWireModel ?? '';  // Default to empty string if not provided
        $this->secondaryInputLabel = $secondaryInputLabel;
        $this->secondaryInputName = $secondaryInputName;
        $this->secondaryInputValue = $secondaryInputValue;
        $this->secondaryInputPlaceholder = $secondaryInputPlaceholder ?? '';
        $this->multipleCheckBoxName = $multipleCheckBoxName ?? 'checkboxValues';
    }

    public function render(): View|Factory|Application
    {
        return view('components.input-radio-or-check');
    }
}
