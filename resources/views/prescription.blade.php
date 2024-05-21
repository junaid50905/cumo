@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection

@section('css')
@endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') DashBoard @endslot
@slot('title') MEDICINE ADMINS @endslot
@endcomponent

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <div class="row mb-3">
          <div class="col-6">
            <h4 class="card-title">MEDICINE ADMINS</h4>
          </div>
          <div class="col-6 text-end">
            <button type="button" class="btn btn-outline-info waves-effect waves-light" data-bs-toggle="modal"
              data-bs-target=".bs-example-modal-lg">ADD</button>
          </div>
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
              <x-input-text type="search" name="search"/>
            </label>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table w-100">
            <thead>
              <tr>
                <th>Student Name</th>
                <th>Prescription Name</th>
                <th>Prescribe By</th>
                <th>Log</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Md. Moinul Islam Supta</td>
                <td>Roger Oliver</td>
                <td>Shonod Shonod</td>
                <td>
                  <span>Create: Nurjahan Dipa @ 2022-03-29 16:04:41</span>
                  <br/>
                  <span>Update: Ohidul Hassan @ 2022-04-12 11:36:44</span>
                </td>
                <td>
                  <button type="button" class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                    <i class="mdi mdi-eye"></i>
                  </button>
                  <button type="button" class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1"> <i
                      class="fas fa-check"></i>
                  </button>
                  <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1"> <i
                      class="fas fa-check"></i>
                  </button>
                  <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                    <i class="mdi mdi-pencil"></i>
                  </button>
                  <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                    <i class="bx bx-dollar"></i>
                  </button>
                  <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                    <i class="fas fa-arrow-circle-right"></i>
                  </button>
                  <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
                    <i class="fas fa-trash-alt"></i>
                  </button>
                </td>
              </tr>
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
<!--  Large modal example -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myLargeModalLabel">Add Medicine Admin Create</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <!-- Seller Details -->
          <section>
            <form>
              <div class="row">
                <div class="col-lg-4">
                    <div class="mb-3">
                      <label for="basicpill-lastname-input">Student:</label>
                      <x-input-select name="student_id" :records="[]" />
                    </div>
                  </div>
                <div class="col-lg-4">
                    <div class="mb-3">
                      <label for="basicpill-lastname-input">Prescription Name:</label>
                      <div class="input-group" >
                        <x-input-text name="hello1" placeholder="">
                        </x-input-text>
                      </div><!-- input -->
                    </div>
                  </div>
                <div class="col-lg-4">
                    <div class="mb-3">
                      <label for="basicpill-lastname-input">Prescribe By:</label>
                      <div class="input-group" >
                        <x-input-text name="hello1" placeholder="">
                        </x-input-text>
                      </div><!-- input -->
                    </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="mb-3">
                  </div>
                </div>
              </div>
            </form>
          </section>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection

@section('script')


<!-- jquery step -->
<script src="{{ URL::asset('/assets/libs/jquery-steps/jquery-steps.min.js') }}"></script>

<!-- form wizard init -->
<script src="{{ URL::asset('/assets/js/pages/form-wizard.init.js') }}"></script>

@endsection