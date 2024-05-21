<div>
    <div class="row">
        <div class="col-6 d-flex  mb-3">
            <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Job title:</label>
            <div class="col-md-8">
                <x-input-select wireModel="job_title" :records="$job" />
            </div>
        </div>
        <div class="col-6 d-flex mb-3">
            <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Department:</label>
            <div class="col-md-8">
                <x-input-select wireModel="department" :records="$d_name" targetColumn="department_name" />
            </div>
        </div>
        <div class="col-6 d-flex  mb-3">
            <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Applicant
                Name:</label>
            <div class="col-md-8">
                <x-input-select wireModel="applicant_name" :records="$s_name" />
            </div>
        </div>
        <div class="col-6 d-flex mb-3">
            <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Work Station:</label>
            <div class="col-md-8">
                <x-input-text wireModel="workStation" />
            </div>
        </div>
        <div class="col-6 d-flex mb-3">
            <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Start
                date:</label>
            <div class="col-md-8">
                <x-input-text wireModel="start_date" type="date" />
            </div>
        </div>
        <div class="col-6 d-flex mb-3">
            <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Logs:</label>
            <div class="col-md-8">
                <x-input-text wireModel="log" />
            </div>
        </div>
    </div>
    <h6 class="text-center">Salary & allowence</h6>
    <form class="repeater" enctype="multipart/form-data">
        <div class="row">
            <div class="col p-0 pe-1 text-center">
                <label for="basic_salary">Basic Salary</label>
            </div>
            <div class="col p-0 pe-1 text-center">
                <label for="house_allowence">House Allowence</label>
            </div>
            <div class="col p-0 pe-1 text-center">
                <label for="madical_allowance">Madical Allowance</label>
            </div>
            <div class="col p-0 ps-5 text-center">
                <label for="total">Total</label>
            </div>
        </div>
        <div data-repeater-list="group-a">
            @foreach ($inputs as $key => $item)
            <div data-repeater-item="" class="row ms-1 removeRow">
                <div class=" col p-0 pe-1 pb-1">
                    <x-input-text type="number" placeholder="Basic Salary" wireModel="basic_salary.{{ $key }}">
                    </x-input-text>
                </div>
                <div class=" col p-0 pe-1 pb-1">
                    <x-input-text type="number" placeholder="House Allowence" wireModel="house_allowence.{{ $key }}">
                    </x-input-text>
                </div>
                <div class=" col p-0 pe-1 pb-1">
                    <x-input-text type="number" placeholder="Madical Allowance"
                        wireModel="medical_allowance.{{ $key }}"></x-input-text>
                </div>
                <div class=" col p-0 gap-1 pb-1 me-4 d-flex">
                    <x-input-text type="number" placeholder="Total" wireModel="total.{{ $key }}" total="true">
                    </x-input-text>
                    @if (!($this->mode == 'show'))
                    <button type="button" class="btn ms-2 btn-danger t removeBtn" wire:click="removeItem({{ $key }})">
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

    <div class="modal-footer">
        <div class="w-25">
            @if ($this->mode == 'edit')
            <button class="btn btn-lg btn-success w-100" wire:click="update()">Update</button>
            @elseif (!($this->mode) == 'show')
            <button class="btn btn-lg btn-success w-100" wire:click="submit()">Save</button>
            @else
            <a href="{{route('job-contact.create')}}" class="btn btn-lg btn-success w-100">
                Go Back
            </a>
            @endif
        </div>
    </div>
</div>