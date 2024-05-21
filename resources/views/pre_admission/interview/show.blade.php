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
                                    <th class="text-center">Name & ID
                                        <span>
                                            <i class="dripicons-arrow-thin-down"></i>
                                            <i class="dripicons-arrow-thin-up"></i>
                                        </span>
                                    </th>
                                    <th class="text-center">DOI</th>
                                    <th class="text-center">Mobile#</th>
                                    <th class="text-center">Teacher Name</th>
                                    <th class="text-center">P. Status</th>
                                    <th class="text-center">Ass. Status</th>
                                    <th class="text-center">Obs. Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="{{ route('student.profile', 1) }}">New Student</a></td>
                                    <td>12 Feb 2024</td>
                                    <td>01521111111</td>
                                    <td>Teacher 1</td>
                                    <td>Paid</td>
                                    <td>Pending</td>
                                    <td>Yes</td>
                                    <td class="d-flex align-items-center justify-content-end">
                                        <a href="{{ route('student.show', 1) }}" target="_blank"
                                            rel="noopener noreferrer"
                                            class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                                            <i class="mdi mdi-eye"></i>
                                        </a>
                                        <a href="{{ route('student.edit', 1) }}" target="_blank"
                                            rel="noopener noreferrer"
                                            class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                            <i class="mdi mdi-pencil"></i>
                                        </a>
                                        <button type="button" wire:click="confirmDelete({{1}})"
                                            class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="{{ route('student.profile', 1) }}">New Student</a></td>
                                    <td>12 Feb 2024</td>
                                    <td>01521111111</td>
                                    <td>Teacher 2</td>
                                    <td>Paid</td>
                                    <td>Pending</td>
                                    <td>Pending</td>
                                    <td class="d-flex align-items-center justify-content-end">
                                        <a href="{{ route('student.show', 1) }}" target="_blank"
                                            rel="noopener noreferrer"
                                            class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                                            <i class="mdi mdi-eye"></i>
                                        </a>
                                        <a href="{{ route('student.edit', 1) }}" target="_blank"
                                            rel="noopener noreferrer"
                                            class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                            <i class="mdi mdi-pencil"></i>
                                        </a>
                                        <button type="button" wire:click="confirmDelete({{1}})"
                                            class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="{{ route('student.profile', 1) }}">New Student</a></td>
                                    <td>12 Feb 2024</td>
                                    <td>01521111111</td>
                                    <td>Teacher 3</td>
                                    <td>Paid</td>
                                    <td>Pending</td>
                                    <td>Yes</td>
                                    <td class="d-flex align-items-center justify-content-end">
                                        <a href="{{ route('student.show', 1) }}" target="_blank"
                                            rel="noopener noreferrer"
                                            class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                                            <i class="mdi mdi-eye"></i>
                                        </a>
                                        <a href="{{ route('student.edit', 1) }}" target="_blank"
                                            rel="noopener noreferrer"
                                            class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                            <i class="mdi mdi-pencil"></i>
                                        </a>
                                        <button type="button" wire:click="confirmDelete({{1}})"
                                            class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="{{ route('student.profile', 1) }}">New Student</a></td>
                                    <td>12 Feb 2024</td>
                                    <td>01521111111</td>
                                    <td>Teacher 4</td>
                                    <td>Paid</td>
                                    <td>Pending</td>
                                    <td>Yes</td>
                                    <td class="d-flex align-items-center justify-content-end">
                                        <a href="{{ route('student.show', 1) }}" target="_blank"
                                            rel="noopener noreferrer"
                                            class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                                            <i class="mdi mdi-eye"></i>
                                        </a>
                                        <a href="{{ route('student.edit', 1) }}" target="_blank"
                                            rel="noopener noreferrer"
                                            class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                            <i class="mdi mdi-pencil"></i>
                                        </a>
                                        <button type="button" wire:click="confirmDelete({{1}})"
                                            class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1">
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