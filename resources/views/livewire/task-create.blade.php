<div>
    <div class="modal-body ">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="d-flex flex-row mb-3">
                        <div class="p-2 mt-1">Activity</div>
                        <div class="p-2">
                            <div class="col-4">
                                <select class="form-control form-select" id="activity_id" wire:model="activity_id" name="activity_id">
                                        <option value="">Please select activity</option>
                                    @foreach($activities as $activity)
                                        <option value="{{$activity->id}}">{{$activity->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <form class="" enctype="multipart/form-data"> 
                        <div data-repeater-list="group-a">
                            @foreach($inputs as $key => $item)
                            <div data-repeater-item class="row removeRow">
                                <div class="d-flex align-self-center row">
                                    <div class="col-3">
                                        <x-input-text name="task_name" wire:model="task_name.{{$key}}" placeholder="Task Name">
                                        </x-input-text>
                                    </div>
                                    <div class="col-4">
                                        <select class="form-select mb-1" name="type" wire:model="type.{{$key}}">
                                            <option selected>Select Type</option>
                                            @php $i = 0; @endphp    
                                            @foreach(['Pre-Vocational', 'Vocational', 'Independent'] as $type)
                                                <option value="{{$i++}}">{{$type}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-2">
                                        <button type="button" class="btn mb-1 btn-danger waves-effect waves-light removeBtn"
                                            wire:click="removeItem({{ $key }})">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </div> 
                        @endforeach   
                        </div> 
                        <div class="col-md-1">
                            <input data-repeater-create type="button" class="btn btn-success mt-3" value="Add"
                            wire:click="addMore()" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary waves-effect"
            data-bs-dismiss="modal">Close</button>
        <button class="btn btn-primary waves-effect waves-light" wire:click="submit()">Save</button>
    </div>
</div>
