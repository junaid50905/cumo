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
                            <span class="d-none d-sm-block">Edit</span>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="case-histroy" role="tabpanel">
                        <div class="modal-body p-0">
                            <div class="card p-0 m-0">
                                <div class="card-body">
                                    <form id="builditp" class="" enctype="multipart/form-data"
                                        action="{{ route('create-itp.update', $itp->id) }}" method="post">
                                        @csrf 
                                        @method('PUT')
                                        <div class="row pb-3">
                                            <div class="col-6 d-flex">
                                                <label class="col-4 col-form-label">Student Name</label>
                                                <div class="col-6">
                                                    <select name="student_id" id="student_id">
                                                        @foreach($students as $student)
                                                            <option  value={{ $student->id }} 
                                                                @if($student->id == $itp->student->id)
                                                                    selected 
                                                                @endif
                                                        >
                                                        {{ $student->name }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6 d-flex">
                                                <label for="example-text-input" class="col-md-4 col-form-label">ITP
                                                    Name</label>
                                                <div class="col-md-6">
                                                    <input type="text" name="itp_name"
                                                        value="{{ $itp->itp_name }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row pb-3">
                                            <div class="col-6 d-flex">
                                                <label for="example-date-input" class="col-md-4 col-form-label">Start
                                                    Date</label>
                                                <div class="col-md-6">
                                                    <input type="date" name="start_date"
                                                        value="{{ $itp->start_date }}">
                                                </div>
                                            </div>
                                            <div class="col-6 d-flex">
                                                <label for="example-date-input" class="col-md-4 col-form-label">End
                                                    Date</label>
                                                <div class="col-md-6">
                                                    <input type="date" name="end_date" value="{{ $itp->end_date }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row pb-3">
                                            <div class="col-6 d-flex">
                                                <label class="form-label col-md-4">Instruction</label>
                                                <div class="col-md-6">
                                                    <input type="text" name="instruction"
                                                        value="{{ $itp->instruction }}">
                                                </div>
                                            </div>
                                            <div class="col-6 border border-2" id="stat">

                                            </div>
                                        </div>
                                        <label for="select_task">Selected Tasks</label>
                                        <div class="row pt-3" id="target">
                                            @foreach($itp->details as $detail)
                                                <div class="form-check form-check-info mb-3 sortable"
                                                    onclick="removeSelected(this)">
                                                    <i class="fa fa-minus-square px-2" aria-hidden="true"
                                                        type="hidden"></i>
                                                    <input class="form-check-input" type="hidden"
                                                        name="{{ $detail->task->id }}"
                                                        id="{{ $detail->task->id }}"
                                                        value="{{ $detail->task->id }}">
                                                    <label class="form-check-label" for="formCheckcolor3"
                                                        type="hidden">{{ $detail->task->title }}</label>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <button class="btn btn-primary">Save</button>
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('bottomJsStack')
<script>
    function addSelected(item) {
        $('#stat').empty()
        $(item).children().prop('checked', true)
        let current = $(item).clone(true)
        let arr = $('#target :input')
        let check = false
        for (var i = arr.length - 1; i >= 0; i--) {
            if ($(arr[i]).val() == $($(item).children()[0]).val()) {
                check = true
            }
        }
        if (check === false) {
            $(item).off('click')
            $(current).prepend('<i class="fa fa-minus-square px-2" aria-hidden="true"></i>')
            $(current).children().attr('type', 'hidden')
            current.attr('onclick', 'removeSelected(this)')
            $('#target').append(current)
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
        $(cur).remove()
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
    $(document).ready(function () {
        let id = $('#student_id').val()
        $('#accordion').empty()
        
        $.ajax({
            url: '{{ url('/') }}' + '/student/fetchMitp/' + id,
            success: function (result) {
                result.forEach(function (item, index) { //console.log(item)
                    let collapse = ''
                    for (let domain in item) {
                        //console.log(item[domain])
                        for(subdomains of item[domain]){
                            //console.log(subdomains)
                            for(sub of subdomains){
                                let str = ''
                                str = str + domain
                                let sub_str = Object.keys(sub)[0]
                                str = str + ' > ' + sub_str
                                //console.log(str)
                                //console.log(sub[Object.keys(sub)[0]])
                                for(areas of sub[Object.keys(sub)[0]]){
                                    //console.log(areas[Object.keys(areas)[0]])
                                    let area_str = ''
                                    area_str = Object.keys(areas)[0]
                                    //let till_single_area = str + '>' + area_str
                                    //console.log(till_single_area)
                                    for(activities of areas[Object.keys(areas)[0]]){ //console.log(activities)
                                        //console.log(till_single_activity)
                                        let activity_str = ''
                                        activity_str = Object.keys(activities)[0]
                                        let till_single_activity = str + ' > '+ area_str + ' > '+ activity_str
                                        for(activity of activities[Object.keys(activities)[0]]){
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
                                            activity.forEach(function(itm, i){
                                                //activity concat one after another
                                                let checked = ' '
                                                $('#target input:hidden').each(
                                                function (ind, el) {
                                                    if ($(el).val() == itm[0][0]) {
                                                        checked = ' checked '
                                                        return false
                                                    }
                                                })
                                                
                                                index++
                                                collapse = collapse +
                                                    '<div class="form-check form-check-info mb-3 sortable" onclick="addSelected(this)">' +
                                                    '<input'+checked+'class="form-check-input" type="checkbox"' +
                                                    'name=' + itm[0][Object.keys(itm[0])[0]] + ' id=' + itm[0][Object.keys(itm[0])[0]] +
                                                    ' value=' + itm[0][Object.keys(itm[0])[0]] + '>' +
                                                    '<label class="form-check-label" for="formCheckcolor3">' +
                                                    itm[0][Object.keys(itm[0])[1]] +
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
                stat()
            }
        });
    });
</script>
@endpush