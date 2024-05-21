<div>
    <section>
        <div class="row">
            <div class="col-lg-4">
                <div class="mb-3">
                    <label for="basicpill-phoneno-input">Student name:</label>
                    <x-input-select wireModel="student_id" :records="$students" />
                </div>
            </div>
            <div class="col-lg-4">
                <div class="mb-3">
                    <label for="basicpill-lastname-input">Prescription Name:</label>
                    <x-input-text wireModel="pres_name" placeholder="Prescription Name">
                    </x-input-text>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="mb-3">
                    <label for="basicpill-phoneno-input">Prescribe By:</label>
                    <x-input-select wireModel="pres_by" :records="$doctors" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 p-0">
                <div class="card">
                    <div class="card-body p-0">
                        <h4 class="text-center pt-3">Posting Transaction Details</h4>
                        <form class="repeater" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-4 p-0  text-center">
                                    <label for="medicine_admin">Medicine Name</label>
                                </div>
                                <div class="col-lg-4 p-0  text-center">
                                    <label for="medicine_dose">Medicine Dose</label>
                                </div>
                                <div class="col-lg-4 p-0  text-center">
                                    <label for="medicine_route">Medicine Route</label>
                                </div>
                            </div>
                            <div data-repeater-list="group-a">
                                @foreach ($inputs as $key => $item)
                                    <div data-repeater-item class="row removeRow">
                                        <div class="col-lg-4 p-0  ps-4 pe-2 pb-1 align-items-center">
                                            <x-input-text wireModel="medicine_admin.{{ $key }}" type="text"
                                                placeholder=""></x-input-text>
                                        </div>
                                        <div class=" col-lg-4 p-0 pe-2 ps-2 pb-1">
                                            <x-input-text wireModel="medicine_dose.{{ $key }}" type="text"
                                                placeholder=""></x-input-text>
                                        </div>
                                        <div class="col-lg-4 p-0 pe-4 ps-2 pe-2 pb-1 align-self-center d-flex">
                                            <x-input-text wireModel="medicine_route.{{ $key }}" type="text"
                                                placeholder=""></x-input-text>
                                            @if (!($this->mode == 'show'))
                                                <button type="button"
                                                    class="btn mb-1 ms-1 btn-danger waves-effect waves-light removeBtn"
                                                    wire:click="removeItem({{ $key }})">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            @if (!($this->mode == 'show'))
                                <input data-repeater-create type="button" class="btn btn-success mt-3 ms-3 mt-lg-0"
                                    value="Add" wire:click="addMore()" />
                            @endif
                        </form>
                        <div class="modal-footer">
                            <div class="w-25">
                                @if ($this->mode == 'edit')
                                    <button class="btn btn-lg btn-success w-100" wire:click="update()">Update</button>
                                @elseif (!$this->mode == 'show')
                                    <button class="btn btn-lg btn-success w-100" wire:click="submit()">Save</button>
                                @else
                                    <a href="{{ route('prescription.create') }}" class="btn btn-lg btn-success w-100">
                                        Go Back
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
