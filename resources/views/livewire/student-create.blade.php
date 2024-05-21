<div>
    <div class="modal-dialog modal-xl @if($mode === 'view') apply-view-only @endif">
        <div class="modal-content">
            <form wire:submit.prevent="submit" id="StudentCreateForm">
                <div class="modal-body p-0">
                    <div class="card p-0 m-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">

                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-md-4 col-form-label">Student
                                            ID:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="code" type="number" placeholder="Student Code"
                                                wireModel="code">
                                            </x-input-text>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-search-input" class="col-md-4 col-form-label">Name:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="student_name" placeholder="Student Name"
                                                wireModel="name">
                                            </x-input-text>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="" class="col-md-4 col-form-label">Date of Birth:</label>
                                        <div class="col-md-8" id="datepicker2">
                                            <x-input-text name="dob" type="date" placeholder="mm/dd/yyyy"
                                                wireModel="dob">
                                            </x-input-text>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="" class="col-md-4 col-form-label">Date of Assesment:</label>
                                        <div class="col-md-8" id="datepicker2">
                                            <x-input-text name="date_of_assessment" type="date" placeholder="mm/dd/yyyy"
                                                wireModel="date_of_assessment">
                                            </x-input-text>

                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-tel-input" class="col-md-4 col-form-label">NID:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="nid" placeholder="Student NID" wireModel="nid">
                                            </x-input-text>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-password-input" class="col-md-4 col-form-label">Present
                                            Address:</label>
                                        <div class="col-md-8">
                                            <x-input-textarea name="present_address"
                                                placeholder="Student Present Address" rows="1"
                                                wireModel="present_address">
                                            </x-input-textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-password-input" class="col-md-4 col-form-label">Parmanent
                                            Address:</label>
                                        <div class="col-md-8">
                                            <x-input-textarea name="permanent_address" wireModel="permanent_address"
                                                placeholder="Student Permanent Address" rows="1">
                                            </x-input-textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">

                                    <div class="mb-3 row">
                                        <label class="col-md-4 col-form-label">Gender:</label>
                                        <div class="col-md-8">
                                            <x-input-select name="gender" :records="$constants::$genders"
                                                wireModel="gender"></x-input-select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-md-4 col-form-label">Blood Group:</label>
                                        <div class="col-md-8">
                                            <x-input-select name="blood_group" :records="$constants::$bloodGroups"
                                                wireModel="blood_group">
                                            </x-input-select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-email-input" class="col-md-4 col-form-label">Suborno Card
                                            No:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="suborno_card_no" placeholder="Suborno Card No"
                                                wireModel="suborno_card_no">
                                            </x-input-text>
                                        </div>
                                    </div>


                                    <div class="mb-3 row">
                                        <label for="example-tel-input"
                                            class="col-md-4 col-form-label">Diagonosis:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="diagnosis" placeholder="Diagonosis"
                                                wireModel="diagnosis"></x-input-text>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-password-input"
                                            class="col-md-4 col-form-label d-flex align-items-center">Photo:</label>
                                        <div class=" col-md-8">
                                            <x-input-text name="photo" type="file" wireModel="photo"></x-input-text>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-number-input" class="col-md-4 col-form-label">Approved for
                                            Observation:</label>
                                        <div class="col-md-8 d-flex align-items-center">
                                            <input name="approved_for_observation" type="checkbox" id="switch1"
                                                switch="none" wire:model="approved_for_observation" checked />
                                            <label for="switch1" data-on-label="Yes" data-off-label="No"></label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3 row">
                                        <label for="example-password-input"
                                            class="col-md-12 col-form-label text-center">
                                            <h4>Father's Name:</h4>
                                        </label>
                                    </div>

                                    <div class="mb-3 row">
                                        <div class="col-md-12">
                                            <x-input-text name="father_name" placeholder="Father Name"
                                                wireModel="father_name"></x-input-text>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-md-12">
                                            <x-input-text name="father_number" placeholder="Father's Number"
                                                wireModel="father_number"></x-input-text>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <div class="col-md-12">
                                            <x-input-text name="father_profession" placeholder="Father's profession"
                                                wireModel="father_profession">
                                            </x-input-text>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-md-12">
                                            <x-input-text name="father_email" placeholder="Father's Email"
                                                wireModel="father_email"></x-input-text>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-md-12">
                                            <x-input-text name="father_doc" placeholder="Father's Document"
                                                wireModel="father_doc"></x-input-text>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-md-12">
                                            <x-input-text name="father_fb_link" placeholder="Father's FB link"
                                                wireModel="father_fb_link">
                                            </x-input-text>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-6">
                                    <div class="mb-3 row">
                                        <label for="example-password-input"
                                            class="col-md-12 col-form-label text-center">
                                            <h4>Mother's Name:</h4>
                                        </label>
                                    </div>

                                    <div class="mb-3 row">
                                        <div class="col-md-12">
                                            <x-input-text name="mother_name" placeholder="Mother Name"
                                                wireModel="mother_name"></x-input-text>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-md-12">
                                            <x-input-text name="mother_number" placeholder="Mother Number"
                                                wireModel="mother_number"></x-input-text>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <div class="col-md-12">
                                            <x-input-text name="mother_profession" placeholder="Mother's profession"
                                                wireModel="mother_profession">
                                            </x-input-text>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-md-12">
                                            <x-input-text name="mother_email" placeholder="Mother's Email"
                                                wireModel="mother_email"></x-input-text>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-md-12">
                                            <x-input-text name="mother_doc" placeholder="Mother's Document"
                                                wireModel="mother_doc"></x-input-text>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-md-12">
                                            <x-input-text name="mother_fb_link" placeholder="Mother's FB link"
                                                wireModel="mother_fb_link">
                                            </x-input-text>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    @if($mode === 'create')
                    <button type="button" class="btn btn-primary waves-effect waves-light" wire:click="store()">
                        Save
                    </button>
                    @elseif ($mode === 'edit')
                    <button type="button" class="btn btn-primary waves-effect waves-light"
                        wire:click="update({{$recordId}})">
                        Update changes
                    </button>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>