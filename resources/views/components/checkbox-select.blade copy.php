<style>
    .checkbox-dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-toggle {
        padding: 6px 10px;
        background-color: #f8f9fa;
        border: 1px solid #ced4da;
        border-radius: 4px;
        cursor: pointer;
        text-align: start;
        display: flex;
        justify-content: space-between;
        align-items: center;
        overflow-x: auto;
    }

    .dropdown-menu {
        display: none;
        position: absolute;
        background-color: #fff;
        min-width: 100%;
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
        z-index: 1;
        max-height: 200px;
        overflow-y: auto;
        border: 1px solid #ced4da;
        border-radius: 4px;
    }

    .dropdown-menu.show {
        display: block;
    }

    .checkbox-item {
        padding: 0px 10px;
        border-bottom: 1px solid #e0dcdc;
    }

    .checkbox-item:hover {
        background-color: #f1f1f1;
    }
</style>

<div class="w-100">
    @php $uniqueId = uniqid('dropdown_'); @endphp <!-- Generate a unique ID for each instance -->
    
    <div class="checkbox-dropdown w-100">
        <button class="dropdown-toggle w-100" type="button" id="dropdownMenuButton_{{ $uniqueId }}" onclick="toggleDropdown('{{ $uniqueId }}')">
            {{ $selectedItems ? implode(',', array_intersect_key($records, array_flip(explode(',', $selectedItems)))) : 'Select Items' }}
        </button>
        <div class="dropdown-menu" id="dropdownMenu_{{ $uniqueId }}">
            @foreach($records as $id => $record)
                <div class="checkbox-item">
                    <input type="checkbox" name="{{ $name }}[]" value="{{ $id }}" id="{{ $name }}_{{ $id }}_{{ $uniqueId }}" onchange="updateSelectedItems('{{ $uniqueId }}', '{{ $name }}')" @if(in_array($id, explode(',', $selectedItems))) checked @endif >
                    <label for="{{ $name }}_{{ $id }}_{{ $uniqueId }}">{{ $record }}</label>
                </div>
            @endforeach
        </div>
    </div>
    <input type="hidden" name="{{ $name }}" id="{{ $name }}_value_{{ $uniqueId }}" value="{{ $selectedItems }}">
</div>

<script>
    function toggleDropdown(uniqueId) {
        const dropdownMenu = document.getElementById('dropdownMenu_' + uniqueId);
        dropdownMenu.classList.toggle('show');
    }

    function updateSelectedItems(uniqueId, name) {
        const checkboxes = document.querySelectorAll('input[name="' + name + '[]"]:checked');
        const selectedOptions = Array.from(checkboxes).map(checkbox => checkbox.nextElementSibling.innerText);
        const selectedOptionsValue = Array.from(checkboxes).map(checkbox => checkbox.value);
        const selectedItemsString = selectedOptions.join(', ');

        // document.getElementById(name + '_value_' + uniqueId).value = selectedOptionsValue.join(',');
        document.getElementById(name + '_value_' + uniqueId).value = selectedOptions.join(',');
        
        // Update dropdown button text
        const dropdownButton = document.getElementById('dropdownMenuButton_' + uniqueId);
        dropdownButton.innerText = selectedOptions.length > 0 ? selectedItemsString : 'Select Items';
    }

    // Close the dropdown if the user clicks outside of it
    window.addEventListener('click', function(event) {
        const dropdownToggles = document.querySelectorAll('.dropdown-toggle');
        dropdownToggles.forEach(function(toggle) {
            const uniqueId = toggle.getAttribute('id').replace('dropdownMenuButton_', '');
            const dropdownMenu = document.getElementById('dropdownMenu_' + uniqueId);
            
            if (!toggle.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.classList.remove('show');
            }
        });
    });

    // Pre-select checkboxes based on provided data
    window.onload = function() {
        document.querySelectorAll('.checkbox-dropdown').forEach(function(dropdown) {
            const uniqueId = dropdown.querySelector('.dropdown-toggle').getAttribute('id').replace('dropdownMenuButton_', '');
            const selectedItemsString = document.getElementById('{{ $name }}_value_' + uniqueId).value;
            
            if (selectedItemsString) {
                const selectedItems = selectedItemsString.split(',');
                selectedItems.forEach(item => {
                    const checkbox = document.getElementById('{{ $name }}_' + item + '_' + uniqueId);
                    if (checkbox) {
                        checkbox.checked = true;
                    }
                });
                updateSelectedItems(uniqueId, '{{ $name }}');
            } else {
                document.getElementById('dropdownMenuButton_' + uniqueId).innerText = 'Select Items';
            }
        });
    };
</script>
