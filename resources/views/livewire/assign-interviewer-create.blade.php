<div>
   <!-- form start -->
   <div class="row">
    <div class="col-md-12 d-flex gap-1">
        <div class="mb-3 col-6">
            <label class="form-label">Job title:</label>
            <div class="col-md-8">
                <x-input-select wireModel="job_title" :records="$job" targetColumn="job_title" />
            </div>
        </div>
        <div class="mb-3 col-6">
            <label class="form-label">Depertment:</label>
            <div class="col-md-8">
                <x-input-text placeholder="Department" wireModel="department_setup_id"></x-input-text>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 p-0">
        <div class="card">
            <div class="card-body">
                <form class="repeater" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-3 p-0 pe-1">
                            <label for="name">Name</label>
                        </div>
                        <div class="col-lg-3 p-0 pe-1">
                            <label for="date">Date</label>
                        </div>
                        <div class="col-lg-3 p-0 pe-1">
                            <label for="time">Time</label>
                        </div>
                        <div class="col-lg-3 p-0 pe-1">
                            <label for="interviewer">Interviewer</label>
                        </div>
                    </div>
                    <div data-repeater-list="group-a">
                        @foreach ($inputs as $key => $item)
                        <div data-repeater-item class="row removeRow">
                            <div class="col-lg-3 d-flex p-0 pe-1 pb-1 align-items-center">
                                <x-input-text  wireModel="name.{{ $key }}"></x-input-text>
                            </div>
                            <div class=" col-lg-3 p-0 pe-1 pb-1">
                                <x-input-text name="date" type="date" placeholder="mm/dd/yyyy" wireModel="date.{{ $key }}"></x-input-text>
                            </div>
                            <div class=" col-lg-3 p-0 pe-1 pb-1">
                                <x-input-text name="time" type="time" placeholder="time" wireModel="time.{{ $key }}"></x-input-text>
                            </div>
                            <div class="col-lg-3 p-0 pe-1 pb-1 align-self-center d-flex">
                                <x-input-select :records="$interviewer" wireModel="interviewer.{{ $key }}"/>
                                @if (!($this->mode == 'show'))
                                <button type="button" class="btn ms-2 btn-danger t removeBtn"
                                    wire:click="removeItem({{ $key }})">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                                @endif
                            </div>
                        </div>
                        @endforeach
                        @if (!($this->mode == 'show'))
                        <input data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0" value="Add"
                            wire:click="addMore()" />
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal-footer">
    <div class="w-25">
        @if ($this->mode == 'edit')
        <button class="btn btn-lg btn-success w-100" wire:click="update()">Update</button>
        @elseif (!($this->mode) == 'show')
        <button class="btn btn-lg btn-success w-100" wire:click="submit()">Save</button>
        @else
        <a href="{{route('assign-interviewer.create')}}" class="btn btn-lg btn-success w-100">
            Go Back
        </a>
        @endif
    </div>
</div>

</div>
