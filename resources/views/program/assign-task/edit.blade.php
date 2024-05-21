@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body p-0">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#case-histroy" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Add</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#case-histroy_list" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">List</span>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="case-histroy" role="tabpanel">
                        <div class="modal-body p-0">
                            <div class="card p-0 m-0">
                                <div class="card-body">
                                    <form id="builditp" method="post" enctype="application/x-www-form-urlencoded"
                                        action="{{route('assign-task.update', $assignTask->id)}}">
                                        @csrf
                                        @method('PUT')
                                        <div class="row pb-3">
                                            <div class="col-6 d-flex">
                                                <label class="col-4 col-form-label"> Student Name</label>
                                                <div class="col-6">
                                                    <x-input-select name="student_id" :records="$students" />
                                                </div>
                                            </div>
                                            <div class="col-6 d-flex">
                                                <label for="example-text-input" class="col-md-4 col-form-label">Assignment Name
                                                </label>
                                                <div class="col-md-6">
                                                    <x-input-text name="assignment_name" placeholder="Assignment Name" :value="$assignTask->assignment_name" required='true'></x-input-text>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row pb-3">
                                            <div class="col-6 d-flex">
                                                <label for="example-date-input" class="col-md-4 col-form-label">Start
                                                    Date</label>
                                                <div class="col-md-6">
                                                    <x-input-text name="start_date" type="date" :value="$assignTask->start_date"
                                                        placeholder="mm/dd/yyyy">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="col-6 d-flex">
                                                <label for="example-date-input" class="col-md-4 col-form-label">End
                                                    Date</label>
                                                <div class="col-md-6">
                                                    <x-input-text name="end_date" type="date" placeholder="mm/dd/yyyy" :value="$assignTask->end_date">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row pb-3">
                                            <div class="col-6 d-flex">
                                                <label class="form-label col-md-4">Instruction</label>
                                                <div class="col-md-6">
                                                    <x-input-textarea name='instruction' rows='1' :value="$assignTask->instruction"></x-input-textarea>
                                                </div>
                                            </div>
                                            <div class="col-6 border border-2" id="stat">

                                            </div>
                                        </div>
                                        
                                        <div class="row pt-3">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Selected Task</th>
                                                        <th>Teacher</th>
                                                        <th>Routine</th>
                                                        <th>Comment</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="target">
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <button class="btn btn-primary" type="submit">Update</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- Expand/Collapse -->
                                    <div class="row pb-2">
                                        <div class="d-flex flex-row-reverse">
                                            <div class="p-2">
                                                <button class="btn btn-info collapsed" data-bs-toggle="collapse"
                                                    data-bs-target=".collapse" type="button" aria-expanded="true"
                                                    aria-controls="collapse" id="collapse">Expand</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="accordion" id="accordion">
                                                <!-- Single item  -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="case-histroy_list" role="tabpanel">
                        <div class="table-responsive">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <label style="display: inline-flex;align-items: center;"> Show <select name="length"
                                            class="form-control form-control-sm form-select form-select-sm">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select> entries
                                    </label>
                                </div>
                                <div class="col-sm-12 col-md-6 text-end">
                                    <label style="display: inline-flex; align-items: center;">Search:
                                        <x-input-text type="search" name="search" />
                                    </label>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table w-100 table-bordered">
                                    <thead>
                                        <tr class="table-primary">
                                            <th>Student</th>
                                            <th>Assignment Name</th>
                                            <th>Start</th>
                                            <th>End</th>
                                            <th>Instruction</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($assign_tasks as $assign_task)
                                            <tr>
                                                <td>{{ $assign_task->student->name }}</td>
                                                <td>{{ $assign_task->assignment_name }}</td>
                                                <td>{{ $assign_task->start_date }}</td>
                                                <td>{{ $assign_task->end_date }}</td>
                                                <td>{{ $assign_task->instruction }}</td>
                                                <td>
                                                    <a class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1"
                                                        href="{{ route('assign-task.edit', $assign_task->id) }}"><i
                                                            class="mdi mdi-pencil"></i></a>
                                                    <button type="button" name="assign_taskshow" value="{{ $assign_task->id }}"
                                                        class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#task_list_{{ $assign_task->id }}">
                                                        <i class="mdi mdi-eye"></i>
                                                    </button>
                                                    <form class="" enctype="multipart/form-data"
                                                        action="{{ route('assign-task.destroy', $assign_task->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit"
                                                            class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    Showing 1 to 2 of 2 entries
                                </div>
                                <div class="col-sm-12 col-md-6 text-end">
                                    <nav>
                                        <ul class="pagination" style="justify-content: end;">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item active">
                                                <a class="page-link" href="#">2 <span
                                                        class="sr-only">(current)</span></a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @foreach($assign_tasks as $assign_task)
                    <div class="modal fade" id="task_list_{{ $assign_task->id }}" tabindex="-2" role="dialog"
                        aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-primary">
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col"><label for="">Student:</label> {{ $assign_task->student->name }}
                                        </div>
                                        <div class="col"><label for="">Assignment name:</label> {{ $assign_task->assignment_name }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col"><label for="">Start Date:</label> {{ $assign_task->start_date }}
                                        </div>
                                        <div class="col"><label for="">End Date:</label> {{ $assign_task->end_date }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col"><label for="">Instruction:</label> {{ $assign_task->instruction }}
                                        </div>
                                    </div>
                                    <table class="table table-bordered">
                                        <thead>
                                            <th>Selected Task</th>
                                            <th>Comment</th>
                                        </thead>
                                        <tbody>
                                            @foreach($assign_task->details as $detail)
                                                @if($detail->task)
                                                <tr>
                                                    <td><i class="fa fa-minus-square px-3" aria-hidden="true">
                                                            {{ $detail->task->title }}</td>
                                                    <td>
                                                        <input type="text" style="border: 0;" value="{{$detail->comment}}">
                                                    </td>
                                                </tr>
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                <div class="modal-footer ">
                                    <button type="button" class="btn font-size-14 btn-danger" id="sa-position">
                                        Print</button>
                                    <button type="button" class="btn font-size-14 btn-success" data-bs-dismiss="modal">
                                        Close</button>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

@push('bottomJsStack')
<script>
    let routine 
    function addSelected(item) { 
        $('#stat').empty()
        $(item).children().prop('checked', true)
        let current = $(item).clone(true)
        let arr = $('#target :input[type=hidden]')
        let check = false
        for (var i = arr.length - 1; i >= 0; i--) {
            if ($(arr[i]).val() == $($(item).children()[0]).val()) {
                check = true
            }
        }
        
        if(check === false) { 
            $(item).off('click')
            $(current).prepend('<i class="fa fa-minus-square px-2" aria-hidden="true"></i>')
            $(current).children().attr('type', 'hidden')
            current.attr('onclick', 'removeSelected(this)')
            
            let id = $(item).children().prop('value')
            $(current).find('input').attr('name', id.toString()+'[]')
            $(routine).attr('name', id.toString()+'[]')
            //teacher list
            let teachers = JSON.parse({!!json_encode($teachers)!!})
            let teacher_list = '<select name='+id+'[]>'
            for(let itm of teachers){
                teacher_list+='<option value='+itm.id+'>'+itm.name+'</option>'
            }
            teacher_list+='</select>'
            //teacher list end
            //comment
            let comment = '<input type="text" name='+id.toString()+'[]'+'>'
            //let comment = '<textarea name='+id.toString()+'[]'+'>'
            //comment end
            let tr = $.parseHTML('<tr></tr>')
            let td1 = $.parseHTML('<td></td>')
            let td2 = $.parseHTML('<td></td>')
            let td3 = $.parseHTML('<td></td>')
            let td4 = $.parseHTML('<td></td>')
            $(td1).append(current)
            $(td2).append(teacher_list)
            $(td3).append(routine)
            $(td3).find('select').attr('name', id.toString()+'[]')
            $(td4).append(comment)
            $(tr).append(td1)
            $(tr).append(td2)
            $(tr).append(td3)
            $(tr).append(td4)
            $('#target').append(tr)
        }
        stat()
    }

    function removeSelected(cur) {
        $('#stat').empty()
        let arr = $('.sortable :checkbox').children().prevObject
        for (var i = arr.length - 1; i >= 0; i--) {
            if ($(arr[i]).val() == $($(cur).children()[1]).val()) {
                $(arr[i]).prop('checked', false)
            }
        }
        $(cur).parent().parent().remove()
        
        $('#target tr').each(function () {
            if (!$.trim($(this).text())) $(this).remove();
        });
        stat()
    }
    
    function stat() {
        let buttons = $('.accordion-button')
        buttons.each(function () {
            let counter = 0
            var target = $(this).parent().siblings().children().children()
            target.each(function () {
                if ($(this).children().first().is(":checked") == true) {
                    counter++
                }
            })

            $('#stat').append('<div class="fw-bold">' + $(this).text() + ': <span class="text-danger">' +
                counter + '</span></div>')
        })
    }
    $('.btn.btn-info.collapsed').on('click', function () {
        if ($(this).text() == 'Collapse') {
            $(this).text('Expand')
        } else if ($(this).text() == 'Expand') {
            $(this).text('Collapse')
        }
    })
    $('#student_id').on('change', function () { 
        routine = ''
        let id = $(this).val()
        $('#accordion').empty()
        let buildurl = $('#builditp').attr('action')
        //buildurl = buildurl.replace(/.$/, id)
        $('#builditp').attr('action', buildurl)
        $('#target').empty()
        $.ajax({
            url: '{{ url('/') }}' + '/student/fetchRoutine/' + id,
            success: function (result) {  
                let select = '<select name="default">'
                
                for(let itm of result){
                    select+='<option value="'+itm.id+'">'+itm.startTime+' - '+itm.endTime+' : '+itm.work+'</option>'
                    
                }
                select+='</select>'
                routine = select
                }
        }) 
        $.ajax({
            url: '{{ url('/') }}' + '/student/fetchItp/' + id,
            success: function (result) { //console.log(result)
                result.forEach(function (item, index) { //console.log(item)
                    let collapse = ''
                    for (let domain in item) {
                        //console.log(item[domain])
                        for (subdomains of item[domain]) {
                            //console.log(subdomains)
                            for (sub of subdomains) {
                                let str = ''
                                str = str + domain
                                let sub_str = Object.keys(sub)[0]
                                str = str + ' > ' + sub_str
                                //console.log(str)
                                //console.log(sub[Object.keys(sub)[0]])
                                for (areas of sub[Object.keys(sub)[0]]) {
                                    //console.log(areas[Object.keys(areas)[0]])
                                    let area_str = ''
                                    area_str = Object.keys(areas)[0]
                                    //let till_single_area = str + '>' + area_str
                                    for (activities of areas[Object.keys(areas)[
                                        0]]) { //console.log(activities)
                                        let activity_str = ''
                                        activity_str = Object.keys(activities)[0]
                                        let till_single_activity = str + ' > ' +
                                            area_str + ' > ' + activity_str
                                        for (activity of activities[Object.keys(activities)[0]]){
                                            collapse = ''
                                            let button_text = till_single_activity
                                            collapse = '<div class="accordion-item">' +
                                                '       <h2 class="accordion-header" id="heading' +
                                                index + '">' +
                                                '            <button class="accordion-button collapsed" type="button"' +
                                                '                data-bs-toggle="collapse" data-bs-target="#collapse' +
                                                index + '"' +
                                                '                aria-expanded="false" aria-controls="collapse' +
                                                index + '">' +
                                                button_text +
                                                '            </button>' +
                                                '        </h2>' +
                                                '        <div id="collapse' + index +
                                                '" class="accordion-collapse collapse"' +
                                                'aria-labelledby="heading' + index +
                                                '" data-bs-parent="#accordion">' +
                                                '<div class="accordion-body">'
                                            activity.forEach(function (itm, i) {
                                                //activity concat one after another
                                                //till_single_activity += itm[0][Object.keys(itm[0])[1]]
                                                index++
                                                collapse = collapse +
                                                    '<div class="form-check form-check-info mb-3 sortable" onclick="addSelected(this)">' +
                                                    '<input class="form-check-input main" type="checkbox"' +
                                                    'name=' + itm[0][Object
                                                        .keys(itm[0])[0]
                                                    ] + ' id=' + itm[0][Object
                                                        .keys(itm[0])[0]
                                                    ] +
                                                    ' value=' + itm[0][Object
                                                        .keys(itm[0])[0]
                                                    ] + '>' +
                                                    '<label class="form-check-label" for="formCheckcolor3">' +
                                                    itm[0][Object.keys(itm[0])[
                                                        1]] +
                                                    '</label>' +
                                                    '</div>'
                                            })
                                            collapse + '</div>' +
                                                '</div>' +
                                                '</div>'
                                            $('#accordion').append(collapse)
                                        }
                                    }
                                }
                            }
                        }
                    }
                })
            }
        });
        
    });
</script>

<script>
$('document').ready(function () {
    // let table = '{!! $table !!}'
    // $('#target').append(table)
      
//    var function1 = function() {

//     var deferred = $.Deferred();

//     //Do your thing. When finished, call deferred.resolve()
//     let id = '{{ $id }}'
//     $("#student_id").val(id).trigger('change')
//     return deferred;
//     }

//     var function2 = function() {

//        //Function 2 code
//        let collection = document.getElementsByClassName('main')
//         console.log(collection)
//         for (let i = 0, len = collection.length; i < len; i++) {
        
//         }
//     }

//     $('#student_id').on('change', function() {
//         function1().then(function2);
//     });


// function asyncEvent() {
//   var dfd = jQuery.Deferred();
//   dfd.resolve( function(){
//     let id = '{{ $id }}'
//     $("#student_id").val(id).trigger('change')
 
//   }
    
//    );
  
//   // Return the Promise so caller can't change the Deferred
//   return dfd.promise();
// }

// $.when( asyncEvent() ).then(
//   function( status ) {
//     let collection = document.getElementsByClassName('main')
//         console.log(collection)
//         for (let i = 0, len = collection.length; i < len; i++) {
        
//         }
//   }
// );
    //console.log($('#accordion').children())
    //console.log($('input.form-check-input'))
   
   //let collection = $("input.form-check-input")
   //console.log(collection)
//    for (let i = 0; i < collection.length; i++) {
//         //console.log(collection[i]);
//     }
});

// Array.from(collection).forEach((plant) => {
//    //console.log(plant)
// })
//console.log(Array.from(collection))
// for (let item of collection) {
//     console.log(item)
// }
//console.log(collection.length)
// setTimeout(() => {
//     let collection = document.getElementsByClassName('main')
//     for (let i = 0, len = collection.length; i < len; i++) {
//       let collection = document.getElementsByClassName('main')
//       console.log(collection[i])
//     }
// }, 1000);
</script>

<script>
    window.addEventListener("load", function(event) {
        let myPromise = new Promise(function(myResolve, myReject) {
        // "Producing Code" (May take some time)
            setTimeout(function(){ 
                let id = '{{ $id }}'
                $("#student_id").val(id).trigger('change')
                myResolve(""); 
            }, 
            1000);
    });

    myPromise.then(function(){
        setTimeout(() => {
            let table = '{!! $table !!}'
            $('#target').append(table)
            let collection = document.getElementsByClassName('main')
            let task_ids = '{{$task_ids}}'
            Array.from(collection).forEach(function(itm, ind){
              if(task_ids.includes($(itm).val())==true){
                $(itm).attr('checked', true)
              }  
            })
            stat()
        }, 1000);
    })
   });
  </script>
@endpush