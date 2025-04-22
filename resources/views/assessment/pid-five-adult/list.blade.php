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
                                    <th>Name
                                        <span>
                                            <i class="dripicons-arrow-thin-down"></i>
                                            <i class="dripicons-arrow-thin-up"></i>
                                        </span>
                                    </th>
                                    <th>Main_Teacher
                                        <span>
                                            <i class="dripicons-arrow-thin-down"></i>
                                            <i class="dripicons-arrow-thin-up"></i>
                                        </span>
                                    </th>
                                    <th>Asst._Teacher</th>
                                    <th>Questions</th>
                                    <th>Answered</th>
                                    <th>Not_Ans.</th>
                                    <th>Marks</th>
                                    <th>Date</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($collections as $item)
                                    <tr>
                                        <td><a href="{{ route('student.profile', 1) }}">{{ $item['appointment_name'] }}</a></td>
                                        <td><a href="{{ route('student.profile', 1) }}">{{ $item['main_teacher_name'] }}</a></td>
                                        <td><a href="{{ route('student.profile', 1) }}">{{ $item['assistant_teacher_name'] }}</a></td>
                                        <td>{{ $item['total_questions'] }}</td>
                                        <td>{{ $item['total_answers'] }}</td>
                                        <td>{{ $item['total_null_answers'] }}</td>
                                        <td>{{ $item['total_sum_of_answers'] }}</td>
                                        <td>{{ $item['assessment_date'] }}</td>
                                        <td class="d-flex align-items-center justify-content-end">
                                            <a href="{{ route('assessment-pid-adult-search.search', ['search_id' => $item['appointment_id']]) }}"
                                                rel="noopener noreferrer"
                                                class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1"
                                                title="Setup">
                                                <i class="mdi mdi-cog"></i>
                                            </a>
                                            <a href="{{ route('assessment-pid-adult.show', $item['appointment_id']) }}"
                                                rel="noopener noreferrer"
                                                class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1"
                                                title="View">
                                                <i class="mdi mdi-eye"></i>
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