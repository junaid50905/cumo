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
                        <span>Care Need Part One Data</span>
                    </div>
                    <div class="input__field_data">
                        <div class="card__search__box">
                            <div class="row">
                                <form action="">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Search by ID (000001)"
                                            aria-label="Search by ID (000001)" aria-describedby="button-addon2">
                                        <button class="btn btn-success" type="button" id="button-addon2">Button</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card__data__box">
                            <div class="field__data mt-2">
                                <table class="table table-hover">
                                    <thead>
                                        <tr class="table-primary">
                                            <th>Name & ID
                                                <span>
                                                    <i class="dripicons-arrow-thin-down"></i>
                                                    <i class="dripicons-arrow-thin-up"></i>
                                                </span>
                                            </th>
                                            <th>DOA</th>
                                            <th>Mobile</th>
                                            <th>Income_Type</th>
                                            <th>Payment</th>
                                            <th>Interview</th>
                                            <th>Assessment</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($allAppointmentStudent as $student)
                                        <tr>
                                            <td><a href="{{ route('student.profile', $student->id) }}">({{ $student->student_id }})
                                                    {{ $student->name }}</a></td>
                                            <td>{{ date('d-M-Y', strtotime($student->interview_date)) }}</td>
                                            <td>{{ $student->phone_number }}</td>
                                            <td>{{ $student->income_type_updated !== null ? $student->income_type_updated : '-' }}
                                            </td>
                                            <td>{{ $student->payment_status_updated !== null ? $student->payment_status_updated : 'Pending' }}
                                            </td>
                                            <td>{{ $student->interview_status !== null ? $student->interview_status : 'Pending' }}
                                            </td>
                                            <td>{{ $student->assessment_status !== null ? $student->assessment_status : 'Pending' }}
                                            </td>
                                            <td class="d-flex align-items-center justify-content-end">
                                                <a href="{{ route('care-need-part-one.show', $student->id) }}"
                                                    rel="noopener noreferrer"
                                                    class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1"
                                                    title="Start Interview">
                                                    <i class="mdi mdi-cog"></i>
                                                </a>
                                                <a href="{{ route('appointment.edit', $student->id) }}"
                                                    rel="noopener noreferrer"
                                                    class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1"
                                                    title="Edit">
                                                    <i class="mdi mdi-pencil"></i>
                                                </a>
                                                <button type="button" wire:click="confirmDelete({{1}})"
                                                    class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1"
                                                    title="delete">
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
@endsection