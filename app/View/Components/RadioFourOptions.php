<?php

namespace App\View\Components;

use Illuminate\View\Component;

class RadioFourOptions extends Component
{
    public $name;
    public $label;
    public $options;
    public $checked;
    public $isVertical;
    public $id;
    public $questionSerialNo;

    public function __construct($name, $label, $options, $checked = [], $isVertical = '', $id = null, $questionSerialNo = null)
    {
        $this->name = $name;
        $this->label = $label;
        $this->options = $options;
        $this->checked = $checked;
        $this->isVertical = $isVertical;
        $this->id = $id ?? uniqid();
        $this->questionSerialNo = $questionSerialNo;
    }

    public function render()
    {
        return view('components.radio-four-options');
    }
}
