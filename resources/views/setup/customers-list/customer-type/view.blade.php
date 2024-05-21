@extends('layouts.master')

@section('title') @lang('translation.Tabs_&_Accordions') @endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') UI Elements @endslot
@slot('title') Tabs & Accordions @endslot
@endcomponent

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">

                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Customer Type Setup</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">Customer Type List</span>
                        </a>
                    </li>
               
                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="home" role="tabpanel">
                        <p class="mb-0">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                       
                        
                                        <form>
                                            <div class="row mb-4">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Type Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="horizontal-firstname-input" placeholder="Enter your name ">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="horizontal-email-input" class="col-sm-3 col-form-label">Description</label>
                                                <div class="col-sm-9">
                                                    <textarea id="message" class="form-control" placeholder="Enter your description here"></textarea>
                                                </div>
                                            </div>
                                         
                        
                                            <div class="row justify-content-end">
                                                <div class="col-sm-9">
                                                    <div>
                                                        <button type="button" class="btn  btn-danger" data-bs-dismiss="modal"> Close</button>
                                                        <button type="button" class="btn  btn-success" data-bs-dismiss="modal"> Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                        </p>
                    </div>
                    <div class="tab-pane" id="profile" role="tabpanel">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                    
                    
                                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th>Customer Type Name</th>
                                                    <th>Description</th>
                                                    <th>Log</th>
                                                    <th>Action</th>
                                                
                                                </tr>
                                            </thead>
                    
                    
                                            <tbody>
                                                <tr>
                                                    <td>Organization</td>
                                                    <td>Organization</td>
                                                    <td>Create: Arif Dev @ 2018-12-09 22:45:45 There is no update record.</td>
                                                    <td><button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                                        <i class="mdi mdi-pencil"></i>
                                                       </button>
                                                       <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
                                                        <i class="fas fa-trash-alt"></i>
                                                        </button> 
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>Individual (In House)</td>
                                                    <td>Individual (In House)</td>
                                                    <td>Create: Md. Rizwanur Rahman @ 2019-01-12 23:04:38 There is no update record</td>
                                                    <td><button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                                        <i class="mdi mdi-pencil"></i>
                                                       </button>
                                                       <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
                                                        <i class="fas fa-trash-alt"></i>
                                                        </button> 
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                    
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div>
                    <div class="tab-pane" id="messages" role="tabpanel">
                        <p class="mb-0">
                            Etsy mixtape wayfarers, ethical wes anderson tofu before they
                            sold out mcsweeney's organic lomo retro fanny pack lo-fi
                            farm-to-table readymade. Messenger bag gentrify pitchfork
                            tattooed craft beer, iphone skateboard locavore carles etsy
                            salvia banksy hoodie helvetica. DIY synth PBR banksy irony.
                            Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh
                            mi whatever gluten yr.
                        </p>
                    </div>
                    <div class="tab-pane" id="settings" role="tabpanel">
                        <p class="mb-0">
                            Trust fund seitan letterpress, keytar raw denim keffiyeh etsy
                            art party before they sold out master cleanse gluten-free squid
                            scenester freegan cosby sweater. Fanny pack portland seitan DIY,
                            art party locavore wolf cliche high life echo park Austin. Cred
                            vinyl keffiyeh DIY salvia PBR, banh mi before they sold out
                            farm-to-table VHS.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    
</div
@endsection