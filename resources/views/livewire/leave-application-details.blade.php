<div class="tab-pane active" id="case-histroy" role="tabpanel">
    <div class="modal-body">
        <div class="col-12 d-flex gap-2">
            <div class="col-4">
                <label>Reason</label>
                <x-input-text wireModel="reason" name="reason" type="text" />
            </div>
            <div class="col-4">
                <label>Employee</label>
                <x-input-select wireModel="employee_id" name="employee_id" :records="$employees" />
            </div>
            <div class="col-4">
                <label>Support Employee</label>
                <x-input-select wireModel="support_employee_id" name="support_employee_id" :records="$employees" />
            </div>
        </div>
        <div class="col-12 d-flex gap-2">
            <div class="col-4">
                <label>Duration in days</label>
                <x-input-text wireModel="duration_in_days" name="duration_in_days" type="number" />
            </div>
            <div class="col-4">
                <label>Duration In Hours</label>
                <x-input-text wireModel="duration_in_hours" name="duration_in_hours" type="number" />
            </div>
            <div class="col-4">
                <label for="leave_type_id" class="control-label">Leave App. Type</label>
                <div class=" d-flex gap-2">
                    @foreach($leave_types as $leave)
                        <div class="radio radio-success pt-2">
                            <input type="radio" id="{{ $leave->id }}" name="leave_type_id" value="{{ $leave->id }}" wire:model="leave_type_id" />
                            <label> {{$leave->name}} </label>
                        </div>
                    @endforeach
                </div>
                
            </div>
        </div>
        <div class="col-12 d-flex gap-2">
            <div class="col-4">
                <label>Address At Leave</label>
                <x-input-text wireModel="address_at_leave" name="address_at_leave" />
            </div>
            <div class="col-4">
                <label>Phone At Leave</label>
                <x-input-text wireModel="phone_at_leave" name="phone_at_leave" />
            </div>
            <div class="col-4">
                <label>Available Leave Attachment</label>
                <x-input-text wireModel="available_leave_ttachment" name="available_leave_ttachment" type="file" />
            </div>
        </div>
    </div>

    <label class="text-center">Leave Application Details </label>
    
    <form class="" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-2"><label for="heading" class="">Type</label></div>  
            <div class="col-md-2"><label for="start_date" class="">Start Date</label></div>
            <div class="col-md-2"><label for="end_date" class="">End Date</label></div>
            <div class="col-md-1"><label for="duration" class="">Duration</label></div>
            <div class="col-md-1"><label for="is_houe" class="">Is Hour</label></div>
            <div class="col-md-1"><label for="avl_time" class="">Available Time</label></div>
            <div class="col-md-1"><label for="half_day" class="">Half Day</label></div>
            <div class="col-md-1"><label for="hour" class="">Hour</label></div> 
        </div> 
        <div data-repeater-list="group-a">
            @foreach($inputs as $key => $item)
                <div data-repeater-item class="row mb-1 removeRow">
                    <div class="col-md-2">
                        <x-input-select wireModel="type.{{ $key }}" name="type"
                        :records="[
                                    '1' => 'Casual',
                                    '2' => 'Emergency',
                                    '3' => 'Paid'
                                    ]"
                        />
                    </div>  

                    <div class="col-md-2">
                        <x-input-text type="date" name="start_date" wireModel="start_date.{{ $key }}" placeholder="dd/mm/yyyy"/>
                    </div>

                    <div class="col-md-2">
                        <x-input-text type="date" name="end_date" wireModel="end_date.{{ $key }}" placeholder="dd/mm/yyyy"/>
                    </div>

                    <div class="col-md-1">
                        <x-input-text type="number" name="duration" wireModel="duration.{{ $key }}"/>
                    </div>

                    <div class="col-md-1">
                        <x-input-text type="checkbox" name="is_houe" wireModel="is_houe.{{ $key }}"/>
                    </div>

                    <div class="col-md-1">
                        <x-input-text type="checkbox" name="avl_time" wireModel="avl_time.{{ $key }}"/>
                    </div>

                    <div class="col-md-1">
                        <x-input-text type="checkbox" name="half_day" wireModel="half_day.{{ $key }}"/>
                    </div>

                    <div class="col-md-1">
                        <x-input-text type="checkbox" name="hour" wireModel="hour.{{ $key }}"/>
                    </div> 

                    <div class="col-md-1">
                        @if(!($this->mode == 'show'))
                            <button type="button" class="btn mb-1 btn-danger waves-effect waves-light removeBtn"
                                wire:click="removeItem({{ $key }})">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        @endif
                    </div>
                </div>
            @endforeach
            @if(!($this->mode == 'show'))
                <input data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0" value="Add"
                    wire:click="addMore()" />
            @endif
        </div>
    </form>
    <div class="modal-footer">
        <div class="w-25">
            @if($this->mode == 'edit')
                <button class="btn btn-lg btn-success w-100" wire:click="update()">Update</button>
            @elseif(!($this->mode) == 'show')
                <button class="btn btn-lg btn-success w-100" wire:click="submit()">Save</button>
            @else
                <a href="{{ route('HR.leave-application.create') }}" class="btn btn-lg btn-success w-100">
                    Go Back
                </a>
            @endif
        </div>
    </div>
</div>

