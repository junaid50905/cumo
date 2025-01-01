@props([
    'wireModel' => null,
    'label',
    'records',
    'selectedValue' => [],
    'secondaryInputWireModel' => null,
    'secondaryInputLabel' => null,
    'secondaryInputName' => '', 
    'secondaryInputValue' => '',
    'secondaryInputPlaceholder' => '',
    'isVertical' => '',
    'type' => 'radio',
    'name' => 'input',
    'multiple' => false,
    'multipleCheckBoxName' => 'checkboxValues'
])

<div class="row py-2">
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
                               id="{{ $name }}_{{ $key }}"
                               @if($multiple)
                                   wire:model.lazy="{{ $multipleCheckBoxName }}.{{ $key }}"
                               @else
                                   @if($wireModel)
                                       wire:model.lazy="{{ $wireModel }}"
                                   @endif
                                   @if($record == $selectedValue) checked @endif
                               @endif
                               @if(in_array($record, (array)$selectedValue)) checked @endif>
                        <label class="form-check-label" for="{{ $name }}_{{ $key }}">
                            {{ $record }}
                        </label>
                    </div>
                @endforeach
            </div>

            {{-- Secondary input field --}}
            @if($secondaryInputLabel)
            <div class="mt-2"
                 @if($wireModel)
                     style="display: {{ in_array('Yes', (array)$selectedValue) ? 'block' : 'none' }};"
                 @else
                     style="display: {{ in_array('Yes', (array)$selectedValue) ? 'block' : 'none' }};"
                 @endif
                 id="secondaryInputContainer">
                <label for="secondaryInput">{{ $secondaryInputLabel }}</label>
                <input type="text" class="form-control" id="secondaryInput"
                    name="{{ $secondaryInputName }}"
                    value="{{ $secondaryInputValue }}"
                    placeholder="{{ $secondaryInputPlaceholder }}"
                    @if($secondaryInputWireModel)
                        wire:model.lazy="{{ $secondaryInputWireModel }}"
                    @endif
                />
            </div>
            @endif
        </div>
    </div>
</div>

{{-- JavaScript for Blade-only usage --}}
@if(!$wireModel)
<script>
    document.addEventListener('DOMContentLoaded', function () {
        let radioButtons = document.querySelectorAll('input[name="{{ $name }}"]');
        let secondaryInputContainer = document.getElementById('secondaryInputContainer');
        let secondaryInput = document.getElementById('secondaryInput');

        // Function to toggle the visibility of the secondary input
        function toggleSecondaryInput() {
            let selectedValue = document.querySelector('input[name="{{ $name }}"]:checked').value;
            if (selectedValue === 'Yes') {
                secondaryInputContainer.style.display = 'block';
            } else {
                // When "No" is selected, clear the secondary input value
                secondaryInputContainer.style.display = 'none';
                secondaryInput.value = '';  // Clear the input field when "No" is selected
            }
        }

        // Attach event listeners
        radioButtons.forEach(function (radio) {
            radio.addEventListener('change', toggleSecondaryInput);
        });

        // Initial check on page load
        toggleSecondaryInput();
    });
</script>
@endif