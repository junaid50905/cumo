<div>
    <div class="modal-body pb-0">
        <div class="row pb-5">
            <div class="col-6 d-flex  mb-3">
                <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Job
                    title:</label>
                <div class="col-md-8">
                    <x-input-select wireModel="job_title" :records="$job" targetColumn="job_title" />
                </div>
            </div>
            <div class="col-6 d-flex mb-3">
                <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Department:</label>
                <div class="col-md-8">
                    <x-input-text placeholder="Department" wireModel="department_setup_id"></x-input-text>
                </div>
            </div>
        </div>
        <form class="repeater pb-5" enctype="multipart/form-data">
            <div class="row">
                <div class="col p-0 pe-1 text-center">
                    <label for="to">To</label>
                </div>
                <div class="col p-0 pe-1 text-center">
                    <label for="subject">Subject</label>
                </div>
                <div class="col p-0 pe-1 text-center">
                    <label for="date">Date</label>
                </div>
                <div class="col p-0 ps-5 text-center">
                    <label for="time">time</label>
                </div>
                <div class="col p-0 ps-5 text-center">
                    <label for="logs">Logs</label>
                </div>
            </div>
            <div data-repeater-list="group-a">
                @foreach ($inputs as $key => $item)
                    <div data-repeater-item="" class="row ms-1 removeRow">
                        <div class=" col p-0 pe-1 pb-1">
                            <x-input-text name="to" placeholder="To" wireModel="to.{{ $key }}">
                            </x-input-text>
                        </div>
                        <div class=" col p-0 pe-1 pb-1">
                            <x-input-text name="subject" placeholder="Subject" wireModel="subject.{{ $key }}">
                            </x-input-text>
                        </div>
                        <div class=" col p-0 pe-1 pb-1">
                            <x-input-text name="date" type="date" placeholder="mm/dd/yyyy"
                                wireModel="date.{{ $key }}"></x-input-text>
                        </div>
                        <div class=" col p-0 pe-1 pb-1">
                            <x-input-text name="time" type="time" placeholder="time"
                                wireModel="time.{{ $key }}"></x-input-text>
                        </div>
                        <div class=" col p-0 gap-1 pb-1 me-4 d-flex">
                            <x-input-text name="logs" placeholder="Logs" wireModel="logs.{{ $key }}">
                            </x-input-text>
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
    <div class="modal-footer">
        <div class="w-25">
            @if ($this->mode == 'edit')
                <button class="btn btn-lg btn-success w-100" wire:click="update()">Update</button>
            @elseif ($this->mode == 'create')
                <button class="btn btn-lg btn-success w-100" wire:click="submit()">Send</button>
                
            @else
                <a href="{{ route('send-mail.create') }}" class="btn btn-lg btn-success w-100">
                    Go Back
                </a>
            @endif
            
        </div>
    </div>
</div>
