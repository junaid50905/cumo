@props([
    'inputType' => 'radio',
    'textArea' => false,
    'linkActive' => null,
    'title' => false,
    'name',
    'label',
    'isVertical',
    'options' => [],
    'linkCodes' => [],
    'categoryId',
    'subCategoryId',
    'questionId',
    'questionSerialNo',
    'wireModel',
    'formData' => []
])

@php
    $answerKey = "{$categoryId}{$subCategoryId}{$questionId}";
    $selectedAnswer = data_get($formData, "answers.$answerKey", $inputType === 'checkbox' ? [] : '');

    // Ensure checkbox answers are always arrays
    if ($inputType === 'checkbox') {
        if (is_string($selectedAnswer)) {
            $selectedAnswer = explode(',', $selectedAnswer);
        } elseif (!is_array($selectedAnswer)) {
            $selectedAnswer = [];
        }
    }

    $textAreaValue = data_get($formData, "notes.$answerKey", '');
@endphp

<div class="row border-bottom py-2">
    <div class="col-xl-12 col-sm-12">
        <div class="mb-2">

            @if($title)
                <h5><strong># {{ $label }}:</strong></h5>
            @else
                <h5>{{ $questionSerialNo }}. {{ $label }}</h5>
            @endif

            @if(!empty($linkCodes) || !empty($linkActive))
                <div class="mb-2">
                    <strong>Link Codes:</strong>
                    @foreach($linkCodes as $code)
                        <span class="badge bg-primary ms-1">{{ $code }}</span>
                    @endforeach
                    @if(!empty($linkActive))
                        <span class="badge bg-success ms-1">{{ $linkActive }}</span>
                    @endif
                </div>
            @endif

            @if($textArea)
                <div class="mt-3">
                    <x-input-textarea rows="3" wireModel="formData.notes.{{ $answerKey }}" />
                </div>
            @else
                @if($inputType === 'radio' || $inputType === 'checkbox')
                    @if(!empty($options))
                        <div class="form-check {{ $isVertical }}">
                            <div class="row">
                                @foreach($options as $key => $option)
                                    <div class="col-md-6 mb-2">
                                        <div class="form-check">
                                            <input
                                                type="{{ $inputType }}"
                                                class="form-check-input"
                                                name="{{ $inputType === 'checkbox' ? $name.'[]' : $name }}"
                                                id="{{ $categoryId }}{{ $subCategoryId }}{{ $questionId }}_{{ $key }}"
                                                value="{{ $key }}"
                                                wire:model="{{ $inputType === 'checkbox' ? "formData.answers.{$answerKey}" : $wireModel }}"
                                                @if(
                                                    ($inputType === 'checkbox' && in_array($key, $selectedAnswer)) ||
                                                    ($inputType === 'radio' && $selectedAnswer == $key)
                                                ) checked @endif
                                            >
                                            <label class="form-check-label" for="{{ $categoryId }}{{ $subCategoryId }}{{ $questionId }}_{{ $key }}">
                                                {{ $option }}
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                @else

                @endif
            @endif

        </div>
    </div>
</div>
