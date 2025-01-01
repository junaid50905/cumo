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
                                            @for ($i = 1; $i <= 3; $i++)
                                                <th>Title{{ $i }}</th>
                                                <th>Count {{ $i }}</th>
                                            @endfor
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($linkCodeTitlesGrouped as $appointmentId => $appointmentData)
                                            <tr>
                                                <!-- Appointment Name -->
                                                <td>{{ $appointmentData['appointment_name'] }}</td>

                                                <!-- Link Code Details (up to 5) -->
                                                @foreach ($appointmentData['link_codes'] as $linkCodeData)
                                                    <td>{{ $linkCodeData['title'] }}</td>
                                                    <td>{{ $linkCodeData['total_count'] }}</td>
                                                @endforeach
                                                <td class="d-flex align-items-center justify-content-end">
                                                    <a href="{{ route('care-need-part-one.show', $appointmentData['appointment_id']) }}"
                                                        rel="noopener noreferrer"
                                                        class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1"
                                                        title="Start Interview">
                                                        <i class="mdi mdi-cog"></i>
                                                    </a>
                                                    <a href="{{ route('care-need-part-one-report.report', $appointmentData['appointment_id']) }}"
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