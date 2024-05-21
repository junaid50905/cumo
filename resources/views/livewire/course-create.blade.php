<div>
    <div class="modal-body p-0">
        <div class="card p-0 m-0">
            <div class="card-body">
                <div class="row pb-3">
                    <div class="col-6">
                        <label class="col-form-label">Course / Service name</label>
                        <x-input-text type="text" wireModel="name" placeholder="">
                        </x-input-text>
                    </div>
                    <div class="col-6">
                        <label class="col-form-label">Duration</label>
                        <x-input-text type="number" wireModel="duration" placeholder="">
                        </x-input-text>
                    </div>
                    <div class="col-6">
                        <label class="col-form-label">Cash Account:</label>
                        <x-input-select wireModel="cash_account_id" :records="$bankAccount" targetColumn="account_code" />
                    </div>
                    <div class="col-6">
                        <label class="col-form-label">Description:</label>
                        <x-input-textarea type="number" wireModel="description" placeholder="">
                        </x-input-textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="repeater" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-4"><label for="heading" class="">Fee
                                                Heading</label></div>
                                        <div class="col-md-4"><label  for="account_id" class="">Acc
                                                No</label></div>
                                        <div class="col-md-4"><label for="amount"
                                                class="">Amount</label></div>
                                    </div>
                                    <div data-repeater-list="group-a">
                                        @foreach ($inputs as $key => $item)
                                        <div data-repeater-item class="row mb-1 removeRow">
                                            <div class=" col-lg-4">
                                                <x-input-select wireModel="fee_heading.{{ $key }}" :records="$courseFeeHeading"  targetColumn="feeHeading"  />
                                            </div>
                                            <div class=" col-lg-4 px-1">
                                                <x-input-select wireModel="account_id.{{ $key }}" :records="$bankAccount"  targetColumn="account_code"  />
                                            </div>
                                            <div class=" col-lg-4 d-flex">
                                                <x-input-text type="number" wireModel="amount.{{ $key }}">
                                                </x-input-text>
                                                @if (!($this->mode == 'show'))
                                                <button type="button" class="btn mb-1 btn-danger waves-effect waves-light removeBtn"
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
            <a href="{{route('course.create')}}" class="btn btn-lg btn-success w-100">
                Go Back
            </a>
            @endif
        </div>
    </div>
</div>
