@props([
    'wireModel',
    'label',
    'records',
    'secondaryInputLabel' => null,
    'secondaryInputWireModel' => null,
    'selectedValue' => '', // Default to an empty string for radio
    'isVertical' => '',
    'type' => 'radio', // Default to radio
    'name' => 'input',
    'multiple' => false // Default to false for radio buttons
])

<div class="row border-top py-2">
    <div class="col-xl-12 col-sm-12">
        <div class="mb-2">
            <h5>{!! $label !!}</h5>
            <div class="form-check {{ $isVertical }}">
                @foreach($records as $key => $record)
                <div class="mb-2 me-5">
                    <input class="form-check-input" 
                           name="{{ $name }}" 
                           type="{{ $type }}" 
                           value="{{ $record }}" 
                           @if($multiple)
                               wire:model.lazy="selectedValues.{{ $key }}"
                           @else
                               wire:model.lazy="{{ $wireModel }}"
                           @endif
                           id="{{ $name }}_{{ $key }}"
                           @if($type === 'radio' && $record == $selectedValue) checked @endif
                           @if($type === 'checkbox' && in_array($record, explode(',', $selectedValue))) checked @endif>
                    <label class="form-check-label" for="{{ $name }}_{{ $key }}">
                        {{ $record }}
                    </label>
                </div>
                @endforeach
            </div>
            @if($secondaryInputLabel)
            <div class="mt-2" style="display: {{ $selectedValue === 'no' ? 'block' : 'block' }}">
                <label for="secondaryInput">{{ $secondaryInputLabel }}</label>
                <input type="text" class="form-control" id="secondaryInput"
                       wire:model.lazy="{{ $secondaryInputWireModel }}">
            </div>
            @endif
        </div>
    </div>
</div>
