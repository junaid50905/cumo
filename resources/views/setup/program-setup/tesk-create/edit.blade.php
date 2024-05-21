@extends('layouts.master')
@section('content')
<form action="{{route('task-activity-update', $id)}}" method="post">
  @csrf  
<div class="row">
    <div class="d-flex flex-row mb-3">
        <div class="p-2 mt-1">Activity</div>
        <div class="p-2">
            <div class="col-4">
                <select class="form-select" name="activity_id">
                    @foreach($activities as $activity)
                        @php $selected = ''; @endphp
                        @if($activity->id === $id)
                          $selected = 'selected';
                        @endif
                        <option {{$selected}} value="{{$activity->id}}">{{$activity->title}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
</div> 
<div class="row mt-3">
    <div class="repeater"> 
        <div data-repeater-list="tasks">
            @foreach($act as $key=>$task)
            <div data-repeater-item class="row">
                <div class="d-flex align-self-center row">
                    <div class="col-3">
                        <input type="text" name="tasks[task_name]" class="form-control" value="{{$task->title}}" placeholder="Task Name">
                    </div>
                    <div class="col-4">
                        <select class="form-select mb-1" name="type">
                            @foreach(['Pre-Vocational', 'Vocational', 'Independent'] as $type)
                               @php
                               $type_selected = ''; 
                               if($type == $task->type){
                                $type_selected = 'selected';
                               }
                               @endphp
                               <option {{$type_selected}} value="{{$type}}">{{$type}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-2">
                        <input class="btn mb-1 btn-danger" data-repeater-delete type="button" value="Delete"/>
                    </div>
                </div>
            </div> 
            @endforeach   
        </div> 
        
        <div class="d-flex flex-row py-2">
            <button type="button" data-repeater-create><i class="fas fa-plus-circle"></i></button>
        </div>
        
    </div>
</div>
<button class="btn btn-primary" type="submit">Update</button>
</form>
@endsection
@section('script')
 <!-- form repeater js -->
<script src="{{ URL::asset('/assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>
<script src="{{ URL::asset('/assets/js/pages/form-repeater.int.js') }}"></script>
<script>
    $(document).ready(function () {
        $('.repeater').repeater({
            // (Optional)
            // start with an empty list of repeaters. Set your first (and only)
            // "data-repeater-item" with style="display:none;" and pass the
            // following configuration flag
            initEmpty: false,
            // (Optional)
            // "defaultValues" sets the values of added items.  The keys of
            // defaultValues refer to the value of the input's name attribute.
            // If a default value is not specified for an input, then it will
            // have its value cleared.
            defaultValues: {
                'text-input': 'add task name'
            },
            // (Optional)
            // "show" is called just after an item is added.  The item is hidden
            // at this point.  If a show callback is not given the item will
            // have $(this).show() called on it.
            show: function () {
                $(this).slideDown();
            },
            // (Optional)
            // "hide" is called when a user clicks on a data-repeater-delete
            // element.  The item is still visible.  "hide" is passed a function
            // as its first argument which will properly remove the item.
            // "hide" allows for a confirmation step, to send a delete request
            // to the server, etc.  If a hide callback is not given the item
            // will be deleted.
            
            
            // (Optional)
            // Removes the delete button from the first list item,
            // defaults to false.
            isFirstItemUndeletable: false
        })
    });
</script>
@endsection