@extends('layouts.master')
@section('title')
@lang('translation.Tabs_&_Accordions')
@endsection
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="card__search__box">
                    <div class="row">
                        <form action="{{ route('pre-admission-income-search.search') }}" method="POST">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="search_id" placeholder="Search by ID (000001)" required>
                                <div class="input-group-append">
                                    <button class="btn btn-success" type="submit">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card__data__box">
                    <div class="field__data mt-2">
                        <table class="table table-hover">
                            <thead>
                                <tr class="table-primary">
                                    <th class="text-center">Name & ID
                                        <span>
                                            <i class="dripicons-arrow-thin-down"></i>
                                            <i class="dripicons-arrow-thin-up"></i>
                                        </span>
                                    </th>
                                    <th class="text-center">DOA</th>
                                    <th class="text-center">Mobile</th>
                                    <th class="text-center">Income_Type</th>
                                    <th class="text-center">Payment</th>
                                    <th class="text-center">Interview</th>
                                    <th class="text-center">Assessment</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($allPreAdmissionStudent as $student)
                                <tr>
                                    <td><a href="{{ route('student.profile', $student->id) }}">({{ $student->student_id }})
                                            {{ $student->name }}</a></td>
                                    <td>{{ date('d-M-Y', strtotime($student->interview_date)) }}</td>
                                    <td>{{ $student->phone_number }}</td>
                                    <td>{{ $student->income_type_updated !== null ? $student->income_type_updated : '-' }}</td>
                                    <td>{{ $student->payment_status_updated !== null ? $student->payment_status_updated : 'Pending' }}</td>
                                    <td>{{ $student->interview_status !== null ? $student->interview_status : 'Pending' }}</td>
                                    <td>{{ $student->assessment_status !== null ? $student->assessment_status : 'Pending' }}</td>
                                    <td class="d-flex align-items-center justify-content-end">
                                        <a href="{{ route('pre-admission-income.edit', $student->id) }}" wire:navigate
                                            rel="noopener noreferrer"
                                            class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                                            <i class="fas fa-credit-card"></i>
                                        </a>
                                        <a href="{{ route('pre-admission-income-invoice.invoice', $student->id) }}" wire:navigate
                                            rel="noopener noreferrer"
                                            class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                                            <i class="fas fa-file-invoice"></i>
                                        </a>
                                        <a href="{{ route('appointment.edit', $student->id) }}" target="_blank"
                                            rel="noopener noreferrer"
                                            class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1"
                                            title="Setup">
                                            <i class="mdi mdi-cog"></i>
                                        </a>
                                        <a href="{{ route('appointment.edit', $student->id) }}" target="_blank"
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
@endsection