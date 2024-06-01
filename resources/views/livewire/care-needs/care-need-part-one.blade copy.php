<div>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .tab-content {
            display: none;
        }
        .tab-content.active {
            display: block;
        }
    </style>

    <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-md">
        <div class="p-6">
            <div class="tab-content {{ $currentTab === 0 ? 'active' : '' }}">
                <h2 class="text-xl font-bold mb-4">General Info ({{ $currentTab }})</h2>
                <form wire:submit.prevent="nextTab">
                    <div class="mb-4">
                        <label class="block text-gray-700">learned_about_us</label>
                        <input type="text" wire:model="formData.generalInfo.learned_about_us"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                        @error('formData.generalInfo.learned_about_us') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">specify_name</label>
                        <input type="text" wire:model="formData.generalInfo.specify_name"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                        @error('formData.generalInfo.specify_name') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">doctor_name</label>
                        <input type="text" wire:model="formData.generalInfo.doctor_name"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                        @error('formData.generalInfo.doctor_name') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">contact_number</label>
                        <input type="text" wire:model="formData.generalInfo.contact_number"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                        @error('formData.generalInfo.contact_number') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                </form>
            </div>
            <div class="tab-content {{ $currentTab === 1 ? 'active' : '' }}">
                <h2 class="text-xl font-bold mb-4">speciality ({{ $currentTab }})</h2>
                <form wire:submit.prevent="nextTab">
                    <div class="mb-4">
                        <label class="block text-gray-700">is_autism</label>
                        <input type="text" wire:model="formData.speciality.is_autism"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                        @error('formData.speciality.is_autism') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">is_down_syndrome</label>
                        <input type="text" wire:model="formData.speciality.is_down_syndrome"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                        @error('formData.speciality.is_down_syndrome') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">is_cerebral_palsy</label>
                        <input type="text" wire:model="formData.speciality.is_cerebral_palsy"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                        @error('formData.speciality.is_cerebral_palsy') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">is_intellectual_disabilityl</label>
                        <input type="text" wire:model="formData.speciality.is_intellectual_disability"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                        @error('formData.speciality.is_intellectual_disability') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                </form>
            </div>
            <div class="tab-content {{ $currentTab === 2 ? 'active' : '' }}">
                <h2 class="text-xl font-bold mb-4">assessmentInfo ({{ $currentTab }})</h2>
                <form wire:submit.prevent="nextTab">
                    <div class="mb-4">
                        <label class="block text-gray-700">social_communication_checklist</label>
                        <input type="text" wire:model="formData.assessmentInfo.social_communication_checklist"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                        @error('formData.assessmentInfo.social_communication_checklist') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">sensory_checklist</label>
                        <input type="text" wire:model="formData.assessmentInfo.sensory_checklist"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                        @error('formData.assessmentInfo.sensory_checklist') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">occupational_assessment</label>
                        <input type="text" wire:model="formData.assessmentInfo.occupational_assessment"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                        @error('formData.assessmentInfo.occupational_assessment') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                </form>
            </div>
            <div class="tab-content {{ $currentTab === 3 ? 'active' : '' }}">
                <h2 class="text-xl font-bold mb-4">homeInfo ({{ $currentTab }})</h2>
                <form wire:submit.prevent="submit">
                    <div class="mb-4">
                        <label class="block text-gray-700">separate_room</label>
                        <input type="text" wire:model="formData.homeInfo.separate_room"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                        @error('formData.homeInfo.separate_room') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">separate_bed</label>
                        <input type="text" wire:model="formData.homeInfo.separate_bed"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                        @error('formData.homeInfo.separate_bed') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">sleep_alone</label>
                        <input type="text" wire:model="formData.homeInfo.sleep_alone"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                        @error('formData.homeInfo.sleep_alone') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">separate_cupboard</label>
                        <input type="text" wire:model="formData.homeInfo.separate_cupboard"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                        @error('formData.homeInfo.separate_cupboard') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                </form>
            </div>
            <div class="flex justify-between mt-4">
                <button type="button" class="px-4 py-2 bg-blue-500 text-white rounded-lg"
                    wire:click="prevTab">Previous</button>
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg" @if($this->isLastTab())
                    wire:click.prevent="submit" @else wire:click.prevent="nextTab" @endif>
                    {{ $this->isLastTab() ? 'Submit' : 'Next' }}
                </button>
            </div>
        </div>
    </div>
</div>
