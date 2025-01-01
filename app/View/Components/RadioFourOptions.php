<?php

namespace App\View\Components;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RadioFourOptions extends Component
{
    public string $name;
    public string $type;
    public string $label;
    public string $isVertical;
    public $options;
    public array $checked;
    public $id;
    public $questionSerialNo;
    public string $wireModel;

    public function __construct(
        $name = '',
        $type = 'radio',
        $label = '',
        $isVertical = true,
        $options,
        $checked = false,
        $id = null,
        $questionSerialNo = null,
        $wireModel = false,
    ){
        $this->name = $name;
        $this->type = $type;
        $this->label = $label;
        $this->isVertical = $isVertical ? 'd-flex' : '';
        $this->options = $options;
        $this->checked = $checked ? (is_array($checked) ? $checked : [$checked]) : [];
        $this->id = $id ?? uniqid();
        $this->questionSerialNo = $questionSerialNo;
        $this->wireModel = $wireModel ? $wireModel : '';
    }

    public function render(): View|Factory|Application
    {
        return view('components.radio-four-options');
    }
}
