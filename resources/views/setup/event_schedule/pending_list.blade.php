@extends('layouts.master')
@section('title')
@lang('translation.Tabs_&_Accordions')
@endsection
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="field__data">
                    <div class="field__label">
                        <span>{{ $eventType === "1" ? "Interview Pending Schedule List" : "Assessment Pending Schedule List"}}</span>
                    </div>
                    <div class="input__field_data">
                        <div class="card__search__box">
                            <div class="row">
                                <form action="">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Search by ID (000001)"
                                            aria-label="Search by ID (000001)" aria-describedby="button-addon2">
                                        <button class="btn btn-success" type="button" id="button-addon2">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card__data__box">
                            <div class="field__data mt-2">
                                <table class="table table-hover">
                                    <thead>
                                        <tr class="table-primary">
                                            <th>Date
                                                <span>
                                                    <i class="dripicons-arrow-thin-down"></i>
                                                    <i class="dripicons-arrow-thin-up"></i>
                                                </span>
                                            </th>
                                            <th>St_Name</th>
                                            <th>IncomeType</th>
                                            <th>Payment</th>
                                            <th>Interview</th>
                                            <th>Assessment</th>
                                            <th>Schedule</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pendingList as $item)
                                        <tr>
                                            <td>{{ \Carbon\Carbon::parse($item['created_at'])->format('d-M-Y') }}</td>
                                            <td>({{ $item['student_id'] }}){{ $item['name'] }}</td>
                                            <td>{{ $item['income_type_updated'] }}</td>
                                            <td>{{ $item['payment_status_updated'] }}</td>
                                            <td>{{ $item['interview_status'] }}</td>
                                            <td>{{ $item['assessment_status'] }}</td>
                                            <td>Pending</td>
                                            <td class="d-flex align-items-center justify-content-end">
                                                <a href="{{ route('setup_event_schedule', [$item['appointment_id'], $item['income_type']]) }}"
                                                    class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1" title="Setup Schedule">
                                                    <i class="mdi mdi-cog"></i>
                                                </a>
                                                <button type="button" onclick="confirmDelete({{ $item['id'] }})"
                                                    class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1"
                                                    title="Delete">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div>
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-end">
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
function confirmDelete(id) {
    if (confirm('Are you sure you want to delete this event?')) {
        window.location.href = "{{ route('setup-assessment-schedule.destroy', ['id' => ':id']) }}".replace(':id', id);
    }
}
</script>
@endsection