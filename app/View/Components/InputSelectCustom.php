<?php
namespace App\View\Components;

use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class InputSelectCustom extends Component
{
    public $records;
    public $firstLabel;
    public $onChange;
    public string $name;
    public string $disabled;
    private $selected;
    public string $required;
    public string $multiple;
    public string $id;
    public string $targetColumn;
    public string $wireModel;
    public string $additional;

    /**
     * Create a new component instance.
     *
     * @return void
     * @throws Exception
     */
    public function __construct($records = [], $firstLabel = null, $onChange = null, $disabled = '', $name = '', $targetColumn = '', $selected = null, $multiple = false, $required = '', $wireModel = '', $additional = false)
    {
        if (!$name && !$wireModel) {
            throw new Exception("Either name or wire model is needed");
        }

        $name = $wireModel ?: $name;
        $this->name = $name . ($multiple ? '[]' : '');
        $this->disabled = $disabled ? 'disabled' : '';
        $this->targetColumn = $targetColumn;
        $this->records = $records;
        $this->firstLabel = $firstLabel ?? "Select";
        $this->selected = $selected;
        $this->required = $required ? 'required' : '';
        $this->multiple = $multiple ? 'multiple' : '';
        $this->wireModel = $wireModel ? "wire:model=$wireModel" : '';
        $this->id = preg_replace('/[\[\]]/', '', $name);
        $this->additional = $additional ?: '';
        $this->onChange = $onChange ?? '';
    }

    public function isSelected($option): bool
    {
        return $this->selected instanceof Collection ? $this->selected->contains($option) : $option == $this->selected;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Application|Factory|View
     */
    public function render(): View|Factory|Application
    {
        return view('components.input-select-custom');
    }
}