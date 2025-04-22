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
                        <span>CNPO Summary Data</span>
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
                                            <th>Speciality Reports</th>
                                            <th>Assessment Reports</th>
                                            <th>Home Info Reports</th>
                                            <th>Educational Reports</th>
                                            <!-- <th>Child Condition Reports</th> -->
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($groupedReports as $appointmentId => $reports)
                                        @php
                                        // Get the appointment details (assuming only one appointment per group)
                                        $appointment = $reports->first()->appointment;
                                        @endphp

                                        <tr>
                                            <td>{{ $appointment->student_id }} - {{ $appointment->name }}</td>

                                            <!-- Speciality Reports -->
                                            <td>
                                                @foreach ($reports->where('table', 'specialities') as $report)
                                                {{ $report->specialities_report }}<br>
                                                @endforeach
                                            </td>

                                            <!-- Assessment Reports -->
                                            <td>
                                                @foreach ($reports->where('table', 'assessment_infos') as $report)
                                                {{ $report->assessment_infos_report }}<br>
                                                @endforeach
                                            </td>

                                            <!-- Home Info Reports -->
                                            <td>
                                                @foreach ($reports->where('table', 'home_infos') as $report)
                                                {{ $report->home_infos_report }}<br>
                                                @endforeach
                                            </td>

                                            <!-- Educational Reports -->
                                            <td>
                                                @foreach ($reports->where('table', 'educational_infos') as $report)
                                                {{ $report->educational_infos_report }}<br>
                                                @endforeach
                                            </td>

                                            <!-- Child Condition Reports -->
                                            <!-- <td>
                                                @foreach ($reports->where('table', 'child_conditions') as $report)
                                                    {{ $report->child_conditions_report }}<br>
                                                @endforeach
                                            </td> -->

                                            <!-- Action Column -->
                                            <td class="d-flex align-items-center justify-content-end">
                                                <a href="{{ route('care-need-part-one.show', $appointment->id) }}"
                                                    rel="noopener noreferrer"
                                                    class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1"
                                                    title="Start Interview">
                                                    <i class="mdi mdi-cog"></i>
                                                </a>
                                                <a href="{{ route('care-need-part-one-report.report', $appointment->id) }}"
                                                    rel="noopener noreferrer"
                                                    class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1"
                                                    title="Edit">
                                                    <i class="mdi mdi-eye"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <!-- Pagination -->
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