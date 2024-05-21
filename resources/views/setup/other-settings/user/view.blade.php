@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body p-0">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#case-histroy" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Add</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#case-histroy_list" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">List</span>
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="case-histroy" role="tabpanel">
                      <form action="{{route('setup.other-settings.academic-calender.create')}}" method="POST">
                          @csrf
                          <div class="modal-body">
                            <div class="row p-5 pt-0 pb-0">
                                <div class="col-12 p-5 pb-3 pt-3"> 
                                    <div class="mb-3 row">
                                        <label class="col-md-2 col-form-label pe-0 ps-0 text-center">User Type:</label>
                                        <div class="col-md-10 pe-0 ps-0">
                                          <x-input-select name="user_id"
                                          :records="[]" />
                                        </div>
                                    </div>  
                                    <div class="mb-3 row">
                                        <label class="col-md-2 col-form-label pe-2 text-center">Name:</label>
                                        <div class="col-md-5 pe-0 ps-0">
                                          <x-input-text name="first_name" placeholder="First Name">
                                          </x-input-text>
                                        </div>
                                        <div class="col-md-5 ps-2">
                                          <x-input-text name="last_name" placeholder="Last Name">
                                          </x-input-text>
                                        </div>
                                    </div>  
                                    <div class="mb-3 row">
                                        <label class="col-md-2 col-form-label pe-0 ps-0 text-center">Email:</label>
                                        <div class="col-md-10 pe-0 ps-0">
                                          <x-input-text name="email" placeholder="Enter Your Email">
                                          </x-input-text>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-md-2 col-form-label pe-0 ps-0 text-center">Username:</label>
                                        <div class="col-md-10 pe-0 ps-0">
                                          <x-input-text name="user_name" placeholder="Enter Your Username">
                                          </x-input-text>
                                        </div>
                                    </div>   
                                    <div class="mb-3 row">
                                        <label class="col-md-2 col-form-label pe-0 ps-0 text-center">Password</label>
                                        <div class="col-md-10 pe-0 ps-0">
                                          <x-input-text name="password" placeholder="Password" minlength="1" maxlength="10" required="" placeholder="" type="password">
                                          </x-input-text>
                                        </div>
                                    </div>  
                                    <div class="mb-3 row">
                                        <label class="col-md-2 col-form-label pe-0 ps-0 text-center">Role:</label>
                                        <div class="col-md-10 pe-0 ps-0">
                                          <x-input-select name="role_id"
                                          :records="[]" />
                                        </div>
                                    </div>   
                                    <div class="mb-3 row">
                                        <label class="col-md-2 col-form-label pe-0 ps-0 text-center">Published:</label>
                                        <div class="col-md-4 pe-0 ps-0">
                                            <div class="square-switch">
                                                <input type="checkbox" id="square-switch3" switch="bool" checked />
                                                <label for="square-switch3" data-on-label="Yes"
                                                    data-off-label="No"></label>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                        <!-- Tab panes One Add  -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-success  waves-light" data-bs-toggle="modal" data-bs-target=".social-communication-view"> Save</button>
                            <button type="button" class="btn btn-outline-danger waves-effect waves-light" data-bs-dismiss="modal"> Close</button> 
                         </div>
                        <!-- Tab panes One Close  -->
                      </form>
                    </div>
                    <div class="tab-pane" id="case-histroy_list" role="tabpanel">
                        <!-- Tab panes Two Add  -->
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
                              <x-input-text  type="search" name="search"/>
                            </label>
                          </div>
                        </div>
                        <div class="table-responsive">
                          <table class="table table-bordered w-100">
                            <thead>
                              <tr class="table-primary">
                                <th>Name</th>
                                <th>Username</th>
                                <th>Role</th>
                                <th>Log</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>A.K.M Shahidullah</td>
                                <td>shahidullah</td>
                                <td>Accounting</td>
                                <td>
                                  <span>Create: Ohidul Hassan @ 2021-06-10 09:10:55</span>
                                  <span>Update: Ohidul Hassan @ 2022-05-31 12:53:28</span> 
                                </td>
                                <td>
                                  <button type="button" class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1"  data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl">
                                    <i class="mdi mdi-eye"></i>
                                  </button>
                                  <button type="button" class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1"> <i
                                      class="fas fa-check"></i>
                                  </button>
                                  <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1"> <i
                                      class="fas fa-check"></i>
                                  </button>
                                  <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1"  data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl">
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
                        <!-- Tab panes Two Close  -->
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
