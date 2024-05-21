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
                      <form>
                          
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
                            <button type="submit" class="btn btn-outline-success  waves-light" data-bs-toggle="modal" data-bs-target=".social-communication-view"> Save</button>
                         </div>
                        <!-- Tab panes One Close  -->
                      </form>
                    </div>
                    <div class="tab-pane" id="case-histroy_list" role="tabpanel">
                        <!-- Tab panes Two Add  -->
                        
                        <livewire:user-list/>
                        <!-- Tab panes Two Close  -->
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
