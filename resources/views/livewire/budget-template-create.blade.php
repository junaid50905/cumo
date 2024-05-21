<div>
    <div class="row">
        <div class="col-6">
            <div class="row">
                <div class="col-12">
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <div class="row mb-4">
                                <div class="col-2 d-flex align-items-center">
                                    <h6>Project</h6>
                                </div>
                                <div class="col-8">
                                    <x-input-select wireModel="project_id" :records="$projects" targetColumn="title" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="row">
                <div class="col-12">
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <div class="row mb-4">
                                <div class="col-2 d-flex align-items-center">
                                    <h6>Title</h6>
                                </div>
                                <div class="col-8">
                                    <x-input-text wireModel="title" type="text" placeholder="Enter tittle here" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 p-0">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">All products</h4>
                    <form class="repeater" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-4 p-0 pe-1">
                                <label for="budget_head">Budget
                                    Head</label>
                            </div>
                            <div class="col-lg-4 p-0 pe-1">
                                <label for="account_id">Account</label>
                            </div>
                            <div class="col-lg-4 p-0 pe-1">
                                <label for="note">Note</label>
                            </div>
                        </div>
                        <div data-repeater-list="group-a">
                            @foreach ($inputs as $key => $item)
                                <div data-repeater-item class="row removeRow">
                                    <div class="col-lg-4  p-0 pe-1 pb-1">
                                        <x-input-select wireModel="budget_head.{{ $key }}" :records="$budgetHead"
                                            targetColumn="title" />
                                    </div>
                                    <div class=" col-lg-4 p-0 pe-1 pb-1">
                                        <x-input-select wireModel="account_id.{{ $key }}" :records="$account"
                                            targetColumn="account_no" />
                                    </div>
                                    <div class="col-lg-4 p-0 pe-1 pb-1 align-self-center d-flex">
                                        <x-input-text wireModel="note.{{ $key }}" />
                                        @if (!($this->mode == 'show'))
                                        <button type="button" class="btn mb-1 btn-danger waves-effect waves-light removeBtn"
                                        wire:click="removeItem({{ $key }})">
                                        <i class="fas fa-trash-alt"></i>
                                        </button>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        @if (!($this->mode == 'show'))
                            <input data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0"
                                value="Add" wire:click="addMore()" />
                        @endif
                    </form>
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
                <a href="{{route('budget-template.create')}}" class="btn btn-lg btn-success w-100">
                    Go Back
                </a>
                @endif
            </div>
        </div>
    </div>

</div>
