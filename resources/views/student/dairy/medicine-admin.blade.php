@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection

@section('css')@endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') DashBoard @endslot
@slot('title')MEDICINE ADMINS @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-6">
                        <h4 class="card-title">MEDICINE ADMINS</h4>
                    </div>
                    <div class="col-6 text-end  mb-3">
                        <button type="button" class="btn btn-outline-info waves-effect waves-light"
                            data-bs-toggle="modal" data-bs-target=""><i class="fa fa-user"></i> Profile</button>
                        <button type="button" class="btn btn-outline-info waves-effect waves-light ms-2"
                            data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl"><i class="fa fa-plus"></i>
                            ADD</button>
                    </div>
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
                            <label style="display: inline-flex;align-items: center;">Search:
                                <x-input-text type="search" name="search" />
                            </label>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered w-100">
                            <thead>
                                <tr class="table-primary">
                                    <th>Student Name</th>
                                    <th>Prescription Name</th>
                                    <th>GivenBy</th>
                                    <th>GivenDate</th>
                                    <th>GivenTime</th>
                                    <th>Log</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <td>Md. Moinul Islam Supta</td>
                                <td>Roger Oliver</td>
                                <td>Shonod Shonod </td>
                                <td>2018-07-14 00:00:00</td>
                                <td> 2018-07-14 02:01:00</td>
                                <td><small>Create: Arif Dev @ 2018-07-28 07:38:02<br/>
                                        Update: Arif Dev @ 2018-07-28 09:04:25</small>
                                </td>
                                <td>
                                    <button type="button"
                                        class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1"
                                        data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl">
                                        <i class="mdi mdi-eye"></i>
                                    </button>
                                    <button type="button"
                                        class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1"
                                        data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl">
                                        <i class="mdi mdi-pencil"></i>
                                    </button>
                                    <button type="button"
                                        class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </td>
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
                                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
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
        </div> <!-- end col -->
    </div> <!-- end row -->
</div>
<!-- sample modal content -->
<div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myExtraLargeModalLabel">Student Create</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="card p-0 m-0">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-6">

                                <div class="mb-3 row ms-2">
                                    <label class="col-md-4 col-form-label">Sudent:</label>
                                    <div class="col-md-8">
                                        <x-input-select name="student_id"
                                        :records="[]" />
                                    </div>
                                </div>
                                <div class="mb-3 row ms-2">
                                    <label class="col-md-4 col-form-label">Prescription:</label>
                                    <div class="col-md-8">
                                        <x-input-select name="prescription_id"
                                        :records="[]" />
                                    </div>
                                </div>
                                <div class="mb-3 row ms-2">
                                    <label class="col-md-4 col-form-label">Given By:</label>
                                    <div class="col-md-8">
                                        <x-input-select name="given_id"
                                        :records="[]" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3 row me-2">
                                    <label for="" class="col-md-4 col-form-label">Given Date:</label>
                                    <div class="col-md-8" id="datepicker2">
                                        <x-input-text name="date" placeholder="dd/mm/yyyy" type="date">
                                        </x-input-text>
                                    </div>
                                </div>
                                <div class="mb-3 row me-2">
                                    <label for="" class="col-md-4 col-form-label">Given Time:</label>
                                    <div class="col-md-8" id="datepicker2">
                                        <x-input-text name="date" placeholder="dd/mm/yyyy" type="time">
                                        </x-input-text>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form class="repeater" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col p-0 pe-1 text-center">
                                <label for="name">Medicine Name</label>
                            </div>
                            <div class="col p-0 pe-1 text-center">
                                <label for="product">AmountGiven</label>
                            </div>
                            <div class="col p-0 pe-1 text-center">
                                <label for="product">AmountGivenUnit</label>
                            </div>
                            <div class="col p-0 ps-5 text-center">
                                <label for="quality">Expire Check</label>
                            </div>
                            <div class="col p-0 pe-5 text-center">
                                <label for="quality">Note</label>
                            </div>
                        </div>
                        <div data-repeater-list="group-a">
                            <div data-repeater-item="" class="row ms-1">
                                <div class=" col p-0 pe-1 pb-1">
                                    <x-input-text name="medicine" placeholder="Medicine Name">
                                    </x-input-text>
                                </div>
                                <div class=" col p-0 pe-1 pb-1">
                                    <x-input-text name="amountGiven" placeholder=" AmountGiven">
                                    </x-input-text>
                                </div>
                                <div class=" col p-0 pe-1 pb-1">
                                    <x-input-text name="amountgivenunit" placeholder="AmountGivenUnit">
                                    </x-input-text>
                                </div>
                                <div class=" col p-0  pb-1 text-center">
                                    <input type="checkbox" class="form-check-input">
                                </div>

                                <div class=" col p-0  pb-1 me-4 d-flex">
                                    <x-input-text name="note" placeholder="Note">
                                    </x-input-text>
                                    <button class="btn btn-danger ms-2">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <input data-repeater-create="" type="button" class="btn btn-success mt-3 ms-1 mt-lg-0"
                            value="Add">
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn font-size-14 btn-success" id="sa-position"> Save</button>
                <button type="button" class="btn font-size-14 btn-danger" data-bs-dismiss="modal"> Close</button>

            </div>
        </div>

    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection

@section('script')
<!-- form wizard init -->
<script src="{{ URL::asset('/assets/js/pages/form-wizard.init.js') }}"></script>
<!-- form repeater js -->
<script src="{{ URL::asset('/assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>

<script src="{{ URL::asset('/assets/js/pages/form-repeater.int.js') }}"></script>



@endsection