<?php

namespace App\View\Components;

use Illuminate\View\Component;

class RadioOptionsWithCode extends Component
{
    public string $inputType;
    public bool $textArea;
    public bool $title;
    public string $name;
    public string $label;
    public string $isVertical;
    public array $options;
    public array $linkCodes;
    public int $categoryId;
    public int $subCategoryId;
    public string $questionId;
    public ?string $questionSerialNo; // ✅ nullable
    public string $wireModel;
    public ?array $formData;
    public ?string $linkActive;

    public function __construct(
        string $name,
        string $label,
        bool $isVertical,
        int $categoryId,
        int $subCategoryId,
        string $questionId,
        ?string $questionSerialNo = null, // ✅ make nullable
        string $wireModel,
        ?array $formData = null,
        ?array $options = [],
        ?array $linkCodes = [],
        ?string $inputType = 'radio',
        ?bool $textArea = false,
        ?bool $title = false,
        ?string $linkActive = null
    ) {
        $this->inputType = $inputType ?? 'radio';
        $this->textArea = $textArea ?? false;
        $this->title = $title ?? false;
        $this->name = $name;
        $this->label = $label;
        $this->isVertical = $isVertical ? 'd-flex' : '';
        $this->options = $options ?? [];
        $this->linkCodes = $linkCodes ?? [];
        $this->categoryId = $categoryId;
        $this->subCategoryId = $subCategoryId;
        $this->questionId = $questionId;
        $this->questionSerialNo = $questionSerialNo; // ✅ safely assigned
        $this->wireModel = $wireModel;
        $this->formData = $formData;
        $this->linkActive = $linkActive;
    }

    public function render()
    {
        return view('components.radio-options-with-code');
    }
}
