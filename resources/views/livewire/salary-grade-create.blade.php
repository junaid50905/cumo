<div>
    <div class="modal-body">
        <div class="row">
            <div class="col-12 p-0">
                <div class="card">
                    <div class="card-body p-0">
                        <form class="repeater" enctype="multipart/form-data">
                            <div data-repeater-list="group-a">
                                @foreach ($inputs as $key => $item)
                                    <div data-repeater-item class="row removeRow">
                                        <div class="col-lg-12 pb-1 align-self-center d-flex">
                                            <div class="col-lg-2 p-0 pt-2 ms-5">
                                                <label for="product">Grade Name</label>
                                            </div>
                                            <div class="col-lg-8 p-0 d-flex gap-3 ">
                                                <x-input-text wireModel="grade_name.{{ $key }}"
                                                    placeholder="Grade Name Here" />
                                                @if (!($this->mode == 'show'))
                                                    <button type="button"
                                                        class="btn mb-1 btn-danger waves-effect waves-light removeBtn"
                                                        wire:click="removeItem({{ $key }})">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="ms-5">
                                    @if ($this->mode == 'create')
                                        <input data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0"
                                            value="Add" wire:click="addMore()" />
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <div class="w-25">
            @if ($this->mode == 'edit')
                <button class="btn btn-lg btn-success w-100" wire:click="update()">Update</button>
            @elseif ($this->mode == 'create')
                <button class="btn btn-lg btn-success w-100" wire:click="submit()">Save</button>
            @else
                <a href="{{ route('yearend-close.create') }}" class="btn btn-lg btn-success w-100">
                    Go Back
                </a>
            @endif
        </div>
    </div>
</div>
