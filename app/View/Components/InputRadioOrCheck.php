<?php

namespace App\View\Components;

use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputRadioOrCheck extends Component
{
    public string $multiple;
    public string $name;
    public string $type;
    public string $label;
    public string $isVertical;
    public string $secondaryInputLabel;
    public $records;
    public string $wireModel;
    public string $secondaryInputName;
    public array $checked;
    public $secondaryInputValue;

    /**
     * Create a new component instance.
     *
     * @return Exception
     */
    public function __construct($records, $label = '', $name = '', $checked = false, $isVertical = true, $multiple = false, $secondaryInputLabel = '', $secondaryInputValue = '', $type = 'radio', $wireModel = false)
    {
        if (!$name and !$wireModel and !$label) {
            return new Exception("Please, pass name or label or wireModel");
        }

        $name                      = $wireModel ?: ($name ?: convertLevelIntoName($label));
        $this->multiple            = $multiple;
        $this->name                = $multiple ? $name . '[]' : $name;
        $this->type                = $multiple ? 'checkbox' : $type;
        $this->label               = $label;
        $this->records             = $records;
        $this->isVertical          = $isVertical ? 'd-flex' : '';
        $this->secondaryInputLabel = $secondaryInputLabel;
        $this->wireModel           = $wireModel ? "name=$wireModel" : '';
        $this->secondaryInputName = $secondaryInputLabel ? "{$name}_secondary" : '';
        $this->checked = $checked ? (is_array($checked) ? $checked : [$checked]) : [];
        $this->secondaryInputValue = $secondaryInputValue;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Application|Factory|View
     */
    public function render()
    {
        return view('components.input-radio-or-check');
    }
}
