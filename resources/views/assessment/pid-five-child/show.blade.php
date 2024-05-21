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
                                    <th>Teacher & ID
                                        <span>
                                            <i class="dripicons-arrow-thin-down"></i>
                                            <i class="dripicons-arrow-thin-up"></i>
                                        </span>
                                    </th>
                                    <th>Interview Date</th>
                                    <th>Payment</th>
                                    <th>Interview</th>
                                    <th>Observation</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="{{ route('student.profile', 1) }}">Student Name (SID#000001)</a></td>
                                    <td><a href="{{ route('student.profile', 1) }}">Teacher Name (TID#000001)</a></td>
                                    <td>12 Feb 2024</td>
                                    <td>Paid</td>
                                    <td>Pending</td>
                                    <td>Pending</td>
                                    <td class="d-flex align-items-center justify-content-end">
                                        <a href="{{ route('care-need-part-one.create', 1) }}" target="_blank"
                                            rel="noopener noreferrer"
                                            class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1"
                                            title="Setup">
                                            <i class="mdi mdi-cog"></i>
                                        </a>
                                        <a href="{{ route('care-need-part-one.show', 1) }}" wire:navigate
                                            rel="noopener noreferrer"
                                            class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                                            <i class="fas fa-file-invoice"></i>
                                        </a>
                                        <a href="{{ route('student.edit', 1) }}" target="_blank"
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
                                <tr>
                                    <td><a href="{{ route('student.profile', 1) }}">Student Name (SID#000002)</a></td>
                                    <td><a href="{{ route('student.profile', 1) }}">Teacher Name (TID#000002)</a></td>
                                    <td>12 Feb 2024</td>
                                    <td>Paid</td>
                                    <td>Processing</td>
                                    <td>Pending</td>
                                    <td class="d-flex align-items-center justify-content-end">
                                        <a href="{{ route('care-need-part-one.create', 1) }}" target="_blank"
                                            rel="noopener noreferrer"
                                            class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1"
                                            title="Setup">
                                            <i class="mdi mdi-cog"></i>
                                        </a>
                                        <a href="{{ route('student.edit', 1) }}" target="_blank"
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
                                <tr>
                                    <td><a href="{{ route('student.profile', 1) }}">Student Name (SID#000003)</a></td>
                                    <td><a href="{{ route('student.profile', 1) }}">Teacher Name (TID#000003)</a></td>
                                    <td>12 Feb 2024</td>
                                    <td>Paid</td>
                                    <td>Completed</td>
                                    <td>Pending</td>
                                    <td class="d-flex align-items-center justify-content-end">
                                        <a href="{{ route('care-need-part-one.create', 1) }}" target="_blank"
                                            rel="noopener noreferrer"
                                            class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1"
                                            title="Setup">
                                            <i class="mdi mdi-cog"></i>
                                        </a>
                                        <a href="{{ route('student.edit', 1) }}" target="_blank"
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
                                <tr>
                                    <td><a href="{{ route('student.profile', 1) }}">Student Name (SID#000004)</a></td>
                                    <td><a href="{{ route('student.profile', 1) }}">Teacher Name (TID#000004)</a></td>
                                    <td>12 Feb 2024</td>
                                    <td>Paid</td>
                                    <td>Completed</td>
                                    <td>Processing</td>
                                    <td class="d-flex align-items-center justify-content-end">
                                        <a href="{{ route('care-need-part-one.create', 1) }}" target="_blank"
                                            rel="noopener noreferrer"
                                            class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1"
                                            title="Setup">
                                            <i class="mdi mdi-cog"></i>
                                        </a>
                                        <a href="{{ route('student.edit', 1) }}" target="_blank"
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
                                <tr>
                                    <td><a href="{{ route('student.profile', 1) }}">Student Name (SID#000005)</a></td>
                                    <td><a href="{{ route('student.profile', 1) }}">Teacher Name (TID#000005)</a></td>
                                    <td>12 Feb 2024</td>
                                    <td>Paid</td>
                                    <td>Completed</td>
                                    <td>Completed</td>
                                    <td class="d-flex align-items-center justify-content-end">
                                        <a href="{{ route('care-need-part-one.create', 1) }}" target="_blank"
                                            rel="noopener noreferrer"
                                            class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1"
                                            title="Setup">
                                            <i class="mdi mdi-cog"></i>
                                        </a>
                                        <a href="{{ route('student.edit', 1) }}" target="_blank"
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