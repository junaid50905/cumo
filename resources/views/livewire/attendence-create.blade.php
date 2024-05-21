<div>
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">Attendence Date</label>
                <x-input-text type="date" placeholder="date" wireModel="attendenceDate"  :records="$attendenceDate"></x-input-text>
            </div>
        </div> 
    </div>
    <div class="modal-body p-0">
        <h6 class="text-center pb-2">Employee list</h6>
        <form enctype="multipart/form-data">
            <div class="row">              
                <div class="col p-0  text-center">
                    <label for="employee">Employee</label>
                </div>
                <div class="col p-0 text-center">
                    <label for="sing_in">Sign In</label>
                </div>
                <div class="col p-0  text-center">
                    <label for="sing_out">Sign Out</label>
                </div>
                <div class="col p-0  text-center">
                    <label for="remark">Remark</label>
                </div>
            </div>
            <div data-repeater-list="group-a">
                @foreach ($inputs as $key => $item)
                <div data-repeater-item="" class="row ms-1 removeRow">
                    <div class=" col p-0 pe-1 pb-1">
                        <x-input-select :records="$e_name" placeholder="Employee"
                            wireModel="employee_id.{{ $key }}" targetColumn="name" />
                    </div>
                    <div class=" col p-0 pe-1 pb-1">
                        <x-input-text type="time" placeholder="Sing In" wireModel="sing_in.{{ $key }}"></x-input-text>
                    </div>
                    <div class=" col p-0 pe-1 pb-1">
                        <x-input-text type="time" placeholder="Sing Out" wireModel="sing_out.{{ $key }}"></x-input-text>
                    </div>
                    <div class=" col p-0 gap-1 pb-1 me-4 d-flex">
                        <x-input-text type="text" placeholder="Remark" wireModel="remark.{{ $key }}"></x-input-text>
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

        <div class="modal-footer">
            <div class="w-25">
                @if ($this->mode == 'edit')
                <button class="btn btn-lg btn-success w-100" wire:click="update()">Update</button>
                @elseif (!($this->mode) == 'show')
                <button class="btn btn-lg btn-success w-100" wire:click="submit()">Save</button>
                @else
                <a href="{{route('attendence.create')}}" class="btn btn-lg btn-success w-100">
                    Go Back
                </a>
                @endif
            </div>
        </div>

    </div>
</div>