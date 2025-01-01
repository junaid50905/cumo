<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                @if ($returnMessage)
                    <div class="alert alert-{{ $returnMessage[0] }} mt-2" role="alert">
                        {{ $returnMessage[1] }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <script>
                        document.addEventListener('livewire:load', function () {
                            setTimeout(function() {
                                document.querySelector('.alert-{{ $returnMessage[0] }}').style.display = 'none';
                            }, 3000);
                        });
                    </script>
                @endif

                <div class="card__data__box">
                    <form wire:submit.prevent="submit">
                        @csrf
                        <div class="field__data mt-2">
                            <div class="field__label">
                                <span>Add Table of Content Data</span>
                            </div>

                            <div class="input__field_data mt-2">
                                <div class="row">
                                    <div class="col-12 pb-3">
                                        <div class="row">
                                            <label for="title" class="col-md-2 col-form-label">Title:</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" wire:model="title" id="title" placeholder="Enter title">
                                                @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 pb-3">
                                        <div class="row">
                                            <label for="section" class="col-md-2 col-form-label">Select Section:</label>
                                            <div class="col-md-10">
                                                <select class="form-control" wire:model="selectedSection" id="section">
                                                    <option value="">-- Select Section --</option>
                                                    @foreach($sections as $section)
                                                        <option value="{{ $section->id }}">{{ $section->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    @if (!is_null($selectedSection))
                                        <div class="col-12 pb-3">
                                            <div class="row">
                                                <label for="sub_section" class="col-md-2 col-form-label">Select Sub-Section:</label>
                                                <div class="col-md-10">
                                                    <select class="form-control" wire:model="selectedSubSection" id="sub_section">
                                                        <option value="">-- Select Sub-Section --</option>
                                                        @foreach($sub_sections as $sub_section)
                                                            <option value="{{ $sub_section->id }}">{{ $sub_section->title }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    @if (!is_null($selectedSubSection))
                                        <div class="col-12 pb-3">
                                            <div class="row">
                                                <label for="area" class="col-md-2 col-form-label">Select Area:</label>
                                                <div class="col-md-10">
                                                    <select class="form-control" wire:model="selectedArea" id="area">
                                                        <option value="">-- Select Area --</option>
                                                        @foreach($areas as $area)
                                                            <option value="{{ $area->id }}">{{ $area->title }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    @if (!is_null($selectedArea))
                                        <div class="col-12 pb-3">
                                            <div class="row">
                                                <label for="activty" class="col-md-2 col-form-label">Select Activity:</label>
                                                <div class="col-md-10">
                                                    <select class="form-control" wire:model="selectedActivity" id="activty">
                                                        <option value="">-- Select Activity --</option>
                                                        @foreach($activities as $activty)
                                                            <option value="{{ $activty->id }}">{{ $activty->title }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    @if (!is_null($selectedActivity))
                                        <div class="col-12 pb-3">
                                            <div class="row">
                                                <label for="task" class="col-md-2 col-form-label">Select Task:</label>
                                                <div class="col-md-10">
                                                    <select class="form-control" wire:model="selectedTask" id="task">
                                                        <option value="">-- Select Task --</option>
                                                        @foreach($tasks as $task)
                                                            <option value="{{ $task->id }}">{{ $task->title }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>

                                <div class="row">
                                    <div class="col-md-12 d-flex align-items-center">
                                        <div class="btn bold">
                                            <input type="text" class="form-control" wire:model="link_code" id="link_code" placeholder="Enter Link Code">
                                            @error('link_code') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <button type="submit" class="btn btn-success w-100">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
